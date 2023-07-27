<?php

namespace App\Http\Controllers\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    //
     //add partner
     public function add(Request $request)
     {
          // Process form data or perform actions from add ussd
          if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(),[
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'phone' => [
                    'required',
                    'numeric',
                    'digits_between:10,12',
                    'regex:/^(0|254)/',
                    Rule::unique('users', 'phone')
                ],
                'acceslevel'=> ['sometimes', 'integer'],
                'Company' => ['required', Rule::unique('users', 'company')],
                'userpriviledge' => ['required'],
                'password' => 'required|confirmed|min:6',
               
                
            ]);
            
            // Process the form fields and handle the success case
            
            // If validation fails, redirect back with errors
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            // Get the validated form fields
            $formFields = $validator->validated();
            //enter default accesslevel
            $formFields['acceslevel'] = $formFields['acceslevel'] ?? 2;
            // encrypt password
            $formFields['password'] = bcrypt($formFields['password']);
            // $formFields['accesslevel'] = 1;
            $user = User::create($formFields);

            return redirect()->back()->with('success', 'User stored successfully');
          }

        return view('Partner.partneradd');
     } 
    // partner view and delete by admin only 
    public function partner(Request $request)
    {
         
        if ($request->isMethod('post')) 
        {
            $partner_id = $request->partner_id;
            
            $partner = User::where('id',$partner_id)->first();
            $partner->delete();
            return response()->json([
                'successful'=>1,
                'success'=>'Partner Deleted Succesful'
            ]);
       
        }
        $partners = User::all();
        return view('Partner.partner',compact('partners'));


    }

    //update and edit partner
    public function update(Request $request,$id)
    {   
        $partner = User::where('id',$id)->first();
        if ($request->isMethod('post')) 
        { 
            $partner_id = $id;   

             // Validation rules
            $rules = [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email',Rule::unique('users', 'email')->ignore($partner_id)],
                'phone' => ['required', 'numeric', 'digits_between:10,12', 'regex:/^(0|254)/',Rule::unique('users', 'phone')->ignore($partner_id)],
                'password' => ['nullable'],
                'Company' => ['required',Rule::unique('users', 'Company')->ignore($partner_id)],
            ];
            
             // Create a new validator instance
            $validator = Validator::make($request->all(), $rules);

             // Check if the validation fails
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            
            $partner_company = $request->input('Company');
            $partner_username = $request->input('name');
            $partner_phone = $request->input('phone');
            $partner_email = $request->input('email');
            $partner_userpriviledge = $request->input('userpriviledge');
            $partner_acceslevel = $request->input('acceslevel');
            $partner_password = $request->input('password');

            

            // If password field is empty, retrieve password from the database using $partner_id
            if (empty($partner_password)) {
                $partner = User::find($partner_id);
                $partner_password = $partner->password;
            }
            else
            {   // Check if the password has at least 6 characters
                if (strlen($partner_password) < 6) {
                    return back()->withErrors(['password' => 'The password must be at least 6 characters.'])->withInput();
                }
                $partner_password = bcrypt($partner_password);
            }

            $user = User::find($partner_id);
            $user->update([
            'name' => $partner_username,
            'phone' => $partner_phone,
            'email' => $partner_email,
            'Company' => $partner_company,
            'acceslevel'=> $partner_acceslevel,
            'userpriviledge' => $partner_userpriviledge,
            'password' => $partner_password,
            // Add other fields to update here
            ]);


            return redirect()->back()->with('success', 'Partner updated successfully');

        
        } 

        if (!$partner) {
            abort(404); // Handle a scenario where the extension is not found
        }
        return view('Partner.partneredit',compact('partner'));
    }
}
