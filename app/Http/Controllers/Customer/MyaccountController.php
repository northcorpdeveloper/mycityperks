<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MyaccountController extends Controller
{
    
    function index(Request $request){
        try{
            $data = $request->all();
            $user = Auth::user();
            
            $user_data = User::where('id',$user->id)->first();
            $data = array('user_data'=>$user_data);      
            return view('customer.myaccount.index', $data);
            
        }catch (\Exception $e){
           return view('customer.myaccount.index',array('error_message'=>$e->getMessage()));
        }
    }
    
    function saveMyAccountData(Request $request){
        try{
            $data = $request->all();
            $user = Auth::user();
            
            $updateArray = array('name'=>trim($data['fname']));
            User::where('id',$user->id)->update($updateArray);
            
            return response(array('httpStatus'=>201, 'dateTime'=>time(), 'status'=>'success','message' => 'Account data updated successfully'),201);
            
        }catch (\Exception $e){
           return response(array('httpStatus'=>500,"dateTime"=>time(),'status' => 'fail','message' =>$e->getMessage()),500);
        }
    }
}
