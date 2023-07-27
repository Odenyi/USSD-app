<?php

namespace App\Http\Controllers\USSD;

use Carbon\Carbon;
use App\Models\Extension;
use App\Models\UssdString;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

class UssdController extends Controller
{

    //validate options on add extesnion and update
    public function valiadateoptions($ussdOption,$partnerOption,$urlOption,$amount,$extension,$request,$route){
        

        //validate options  from add ussd
        if($ussdOption === '' || $partnerOption === '' || !filter_var($urlOption, FILTER_VALIDATE_URL)|| !is_numeric($extension)|| !is_numeric($amount)){
            if($ussdOption === ''){
                $option = "USSD";
            }
            else if($partnerOption === ''){
                $option = "Partner";
            }
            else if(!filter_var($urlOption, FILTER_VALIDATE_URL)){
                $option = "URL";
            }
            else if(!is_numeric($extension)){
                $option = "extension";
            }
            else if(!is_numeric($amount)){
                $option = "amount";
            }
            
            $errormessage = "You have entered an invalid {$option}";
            if($route == 'addussd'){
                return redirect()->route('addussd')->withInput($request->input())->with('error',$errormessage);

            }

            return back()->withInput($request->input())->with('error',$errormessage);
        }
        return 0;
    }
    //
    //add extesion and mapping
    public function add(Request $request)
    {
      
         // Handle POST request
        // Process form data or perform actions from add ussd
        if ($request->isMethod('post')) {
            // Retrieve the selected options from the request
            $ussdOption = $request->input('ussd_string');
            $partnerOption = $request->input('partner');
            $urlOption = $request->input('url');
            $amount = $request->input('amount');
            $extension = $request->input('extension');

             //validateoption
            $validateoption = $this->valiadateoptions($ussdOption,$partnerOption,$urlOption,$amount,$extension,$request,'addussd');
            // Check if the extension exists in the database
           if ($validateoption === 0)
           {
                $existingExtension = Extension::where('extension', $extension)->where('ussd_id',$ussdOption)->first();
                if($existingExtension){
                    $errormessage = 'Extension already exists';
                    return redirect()->route('addussd')->withInput($request->input())->with('error',$errormessage);
                }
                
                $is_accountno_exist = true; //flag
                //check if account number exists
                while($is_accountno_exist){
                    $randomAccount = mt_rand(1000, 9999);
                    $acNumber = "MCL".$randomAccount;
                    $existingAcNumber = Extension::where('account_no', $acNumber)->first();
                    if(!$existingAcNumber){
                        $account = $acNumber;
                        $is_accountno_exist = false; //flag

                    }
                }
                // Get the current timestamp in the Nairobi timezone
                $now = Carbon::now('Africa/Nairobi');
                // Add 30 days to the current timestamp
                $expiryDate = $now->addDays(30);
              

                //update expiry date by 30 day
                // Create a new Extension instance
                $newExtension = new Extension();
                $newExtension->user_id = $partnerOption;
                $newExtension->ussd_id = $ussdOption;
                $newExtension->extension = $extension;
                $newExtension->account_no = $account ;
                $newExtension->url = $urlOption;
                $newExtension->amount = $amount ;
                $newExtension->expiry_date = $account ;
                $newExtension->expiry_date = $expiryDate ;
                $newExtension->save();

                return redirect()->route('addussd')->with('success', 'Extension stored successfully');

           
        }
        return $validateoption;
       }
    
        $ussdstrings = UssdString::all();
        return view('USSD.addussd',compact('ussdstrings'));
      
    }
    
     //add ussd code

     public function addcode(Request $request)
     {
        if ($request->isMethod('post')) {
            // code
            $ussdcode = $request->input('code');
            // check if code is 3 numbers
            if (!preg_match('/^\d{3}$/', $ussdcode)) {
                $errormessage = "The USSD code must have 3 digits";
                return redirect()->route('addcode')->withInput($request->input())->with('error',$errormessage);
            }
            // Check if the code exists in the database
            $existingcode = UssdString::where('code', $ussdcode)->first();
            if($existingcode){
                $errormessage = 'USSD already exists';
                return redirect()->back()->withInput($request->input())->with('error',$errormessage);
            }
            // Create a new USSD instance
            $newcode = new UssdString();
            $newcode->code = $ussdcode;
            $newcode->save();
            return redirect()->route('addcode')->with('success', 'USSD stored successfully');

        }
        return view('USSD.addcode');

        

     }
    //  mapp and view ussd
     public function ussdextension()
     {
        // Retrieve specific fields from the "exension" table
        $extensions = Extension::select('id', 'user_id','ussd_id', 'extension','created_at','expiry_date','url','updated_at')->get();
        // get user mapped using user
        $routeName = Route::currentRouteName();
    
        // Set the view based on the route name
        $view = '';
        switch ($routeName) {
            case 'ussdmaping':
                $view = 'USSD.ussdmapping';
                break;
            case 'viewussd':
                $view = 'USSD.viewussd';
                break;
            // Add more cases as needed
            
            default:
                abort(404); // Handle invalid routes or show a default view
        }
    
        // Pass the view to the response
        return View::make($view,compact('extensions'));
        

     }

//edit extension
     public function edit($id)
    {
        // Fetch data based on the provided ID
        $extension = Extension::find($id);
       
        
        // Check if the extension exists
        if (!$extension) {
            abort(404); // Handle a scenario where the extension is not found
        }
        //get other string for selection 
        $ussdStrings = UssdString::where('id', '!=', $extension->ussd_id)->get();
        $partners = User::where('id', '!=', $extension->user_id)->get();
        // Pass the data to the view or perform any other necessary operations
        return view('USSD.editussd',compact('extension','ussdStrings','partners'));
    }

    // update extensions once edited
    public function updateextension(Request $request,$id)
    {
         // Retrieve the selected options from the request
         $ussdOption = $request->input('ussd_string');
         $partnerOption = $request->input('partner');
         $urlOption = $request->input('url');
         $amount = $request->input('amount');
         $extension = $request->input('extension');
         $expiry_date = $request->input('expiry_date');
         $status  = $request->input('status');
         
         

         //validateoption
         $validateoption = $this->valiadateoptions($ussdOption,$partnerOption,$urlOption,$amount,$extension,$request,'updateextension');
         if ($validateoption === 0)
         {  
            //convert to datetime the data from expiry date 
            $datetime = Carbon::createFromFormat('Y-m-d\TH:i', $expiry_date);
            

            $existingExtension = Extension::where('extension', $extension)->where('id', '!=', $id)->where('ussd_id',$ussdOption)->first();
                if($existingExtension){
                    $errormessage = 'Extension already exists';
                    return back()->withInput($request->input())->with('error',$errormessage);
                }
                $model = Extension::find($id); 

                if ($model) {
                    // Update the model attributes
                    $model->ussd_id = $ussdOption;
                    $model->user_id = $partnerOption;
                    $model->url = $urlOption;
                    $model->amount = $amount;
                    $model->extension = $extension;
                    $model->status = $status ;
                    $model->expiry_date = $datetime;
                
                    // Save the changes to the database
                    $model->save();
                    return back()->with('success', 'Extension Updated successfully');
                }

         }
         return $validateoption;
    }

    //delete extension
    public function deleteextension(Request $request){
        $deleteid = $request->input('extension_id');
       
            $delete = Extension::where('id',$deleteid)->first();
            $delete->delete();
            return response()->json([
                'successful'=>1,
                'success'=>'Extension Deleted Successful'
            ]);
       
      
    }
    

}
