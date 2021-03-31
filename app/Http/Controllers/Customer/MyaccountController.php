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
            
            $updateArray = array('name'=>trim($data['fname']));
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
    
    
    
}
