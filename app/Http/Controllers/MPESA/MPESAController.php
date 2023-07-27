<?php

namespace App\Http\Controllers\MPESA;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class MPESAController extends Controller
{
    //
     //get access token
     public function getAccessToken()
     {
         $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
         
         $curl = curl_init($url);
         curl_setopt_array(
             $curl,
             array(
                 CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                 CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_HEADER =>false,
                 CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
             )
         );
         $response = json_decode(curl_exec($curl));
         curl_close($curl);
 
         // return $response;
         return $response->access_token;
     }
     
   //initiate stk push
     public function stkPush(Request $request)
     {
         $timestamp = date('YmdHis');
         $password = base64_encode( env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp);
         // $user = User::where('user_id',Auth::user()->id)->first();
         $phone=($request->phone);
         
         $phoneNumber = (substr($phone, 0, 1) == "+") ? str_replace("+", "", $phone) : $phone;
         $phone =  $phoneNumber;
         $phoneNumber = (substr($phone, 0, 1) == "0") ? preg_replace("/^0/", "254", $phone) : $phone;
         $phone =  $phoneNumber;
         $phoneNumber = (substr($phone, 0, 1) == "7") ? "254{$phone}" : $phone;
         $phone =  $phoneNumber;
         $phoneNumber = (substr($phone, 0, 1) == "1") ? "254{$phone}" : $phone;
             
         $amount = ceil($request->amount);

       
 
         $curl_post_data = array(
             'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
             'Password' => $password,
             'Timestamp' => $timestamp,
             'TransactionType' => 'CustomerPayBillOnline',
             'Amount' =>$amount,
             'PartyA' => $phoneNumber,
             'PartyB' => env('MPESA_STK_SHORTCODE'),
             'PhoneNumber' => $phone,
             'CallBackURL' => env('MPESA_TEST_URL'). '/api/stkpush',
             'AccountReference' => "MCL8863",
             'TransactionDesc' => "MCL8863"
           );
 
         $url = '/stkpush/v1/processrequest';
 
         $response = $this->makeHttp($url, $curl_post_data);
         
         Log::info('STK inprogress endpoint hit');
         Log::info(json_decode($response, true));
         $jsond_response =json_decode($response, true);
         if($jsond_response["ResponseCode"] == 0){
            
         }
       
         return $response;
     }
 
  
//  make request to safaricom
     public function makeHttp($url, $body)
     {
         
         $url = 'https://sandbox.safaricom.co.ke/mpesa/' . $url;
         $curl = curl_init();
         curl_setopt_array(
             $curl,
             array(
                     CURLOPT_URL => $url,
                     CURLOPT_HTTPHEADER => array('Content-Type:application/json','Authorization:Bearer '. $this->getAccessToken()),
                     CURLOPT_RETURNTRANSFER => true,
                     CURLOPT_POST => true,
                     CURLOPT_POSTFIELDS => json_encode($body)
                 )
         );
         $curl_response = curl_exec($curl);
         curl_close($curl);
         return $curl_response;
     }
}
