<?php

namespace App\Http\Controllers\Customer;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Response;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;


class MyaccountController extends Controller
{
    
    function index(Request $request){
            $countriesList = DB::table('tbl_countries')->get();
        try{
            $data = $request->all();
            $user = Auth::user();
            
            $user_data = User::where('id',$user->id)->first();
            $data = array('user_data'=>$user_data, 'countriesList'=>$countriesList);      
            return view('customer.myaccount.index', $data);
            
        }catch (\Exception $e){
           return view('customer.myaccount.index',array('error_message'=>$e->getMessage()));
        }
    }
    
     function saveMyAccountData(Request $request){
        try{
            $data = $request->all();
            $user = Auth::user();
            
            $validationRules = array('fname'=>'required','email'=>'required');
            
            $attributes = array('fname'=>'Full Name','email'=>'Email Address');

            $validator = Validator::make($data,$validationRules,array(),$attributes);
            if($validator->fails()){ 
                return response(array('httpStatus'=>400, "dateTime"=>time(), 'status'=>'fail', 'message'=>'Validation error', 'errors' => $validator->errors()));
            }
            
            
            $oldmobile=$data['oldmobile'];
            $newmobile=$data['mobile'];
            if($oldmobile == $newmobile){
                //$is_verification =1;
                
                $verification_code =$data['oldverification_code'];
                
                $is_verification =$data['is_verification_old'];
                
                
                
            }else{
                $is_verification =0;
                
                $fourRandomDigit = mt_rand(1000,9999);
                $verification_code =$fourRandomDigit;
                
            }
            
            $updateArray = array('name'=>trim($data['fname']),'country'=>$data['country'],'user_state'=>$data['state'],'city'=>$data['city'],'zipcode'=>$data['zipcode'],'account_title'=>$data['account_title'],'account_number'=>$data['account_number'],'bank_address'=>$data['bank_address'],'card_name'=>$data['card_name'],'card_number'=>$data['card_number'],'expiry_month'=>$data['month'],'expiry_year'=>$data['year'],'sec_code'=>$data['sec_code'],'mobile'=>$data['mobile'],'is_verification'=>$is_verification,'verification_code'=>$verification_code);
            User::where('id',$user->id)->update($updateArray);
            
            return response(array('httpStatus'=>201, 'dateTime'=>time(), 'status'=>'success','message' => 'Account data updated successfully'),201);
            
        }catch (\Exception $e){
           return response(array('httpStatus'=>500,"dateTime"=>time(),'status' => 'fail','message' =>$e->getMessage()),500);
        }
    }
    
    
    function getStateData(Request $request){
            $data = $request->all();
            $cntID=$data['countryID'];
            $statesbyID = DB::table('tbl_states')->where('country_id',$cntID)->get();
            return Response::json($statesbyID);
            
    }
    
     public function updatePassword(Request $request)
    {
         try{
            $data = $request->all();
            $user = Auth::user();
            
            $validationRules = array('password'=>'required');
            
            $attributes = array('password'=>'Password');

            $validator = Validator::make($data,$validationRules,array(),$attributes);
            if($validator->fails()){ 

                return response(array('httpStatus'=>400, "dateTime"=>time(), 'status'=>'fail', 'message'=>'Validation error', 'errors' => $validator->errors()));
            }	
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
            return response(array('httpStatus'=>201, 'dateTime'=>time(), 'status'=>'success','message' => 'Password change successfully.'),201);
            
        }catch (\Exception $e){
           return response(array('httpStatus'=>500,"dateTime"=>time(),'status' => 'fail','message' =>$e->getMessage()),500);
        }

    }
    
    
    public function updateMobile(Request $request)
    {
         try{
            $data2 = $request->all();
            $user = Auth::user();
            
            $validationRules = array('mobile'=>'required');
            
            $attributes = array('mobile'=>'Mobile');

            $validator = Validator::make($data,$validationRules,array(),$attributes);
            if($validator->fails()){ 

                return response(array('httpStatus'=>400, "dateTime"=>time(), 'status'=>'fail', 'message'=>'Validation error', 'errors' => $validator->errors()));
            }	
            User::find(auth()->user()->id)->update(['mobile'=> $request->mobile]);
            return response(array('httpStatus'=>201, 'dateTime'=>time(), 'status'=>'success','message' => 'Password change successfully.'),201);
            
        }catch (\Exception $e){
           return response(array('httpStatus'=>500,"dateTime"=>time(),'status' => 'fail','message' =>$e->getMessage()),500);
        }

    }
    
    
    public function phoneVarification(Request $request)
    {
         try{
            $data2 = $request->all();
            $user = Auth::user();
            $user_data = User::where('id',$user->id)->where('verification_code',$request->fullotp)->first();
            if($user_data){
                User::find(auth()->user()->id)->update(['is_verification'=> 1]);
                return response(array('httpStatus'=>201, 'dateTime'=>time(), 'status'=>'success','message' => 'Verified successfully.'),201);
            }else{
                return response(array('httpStatus'=>200, 'dateTime'=>time(), 'status'=>'fail','message' => 'Wrong OTP'),200); 
            }
        }catch (\Exception $e){
           return response(array('httpStatus'=>500,"dateTime"=>time(),'status' => 'fail','message' =>$e->getMessage()),500);
        }

    }

      
    
    public function sendSms(Request $request)
    {
        
        
        $accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
        $authToken  = config('app.twilio')['TWILIO_AUTH_TOKEN'];
        $appSid     = config('app.twilio')['TWILIO_APP_SID'];
        $client = new Client($accountSid, $authToken);
        try
        {
            $otpcode = $request->otpcode;
            $mobileno = "+91".$request->mobileno;
            
            $client->messages->create(
            // the number you'd like to send the message to
                $mobileno ,
           array(
                 // A Twilio phone number you purchased at twilio.com/console
                 'from' => '+12673961067',
                 // the body of the text message you'd like to send
                 'body' => 'Verification Code is '.$otpcode
             )
         );
            
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }
    
    
    
    
}
