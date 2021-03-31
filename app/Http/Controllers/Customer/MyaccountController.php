<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MyaccountController extends Controller
{
    
    function index(Request $request){
        try{
            $data = $request->all();
            $user = Auth::user();
            
            $data=array('aa','ss');      
            return view('customer.myaccount.index', compact('data'));
            
        }catch (\Exception $e){
           return view('customer.myaccount.index',array('error_message'=>$e->getMessage()));
        }
    }
    
    function saveAccountData(Request $request){
        try{
            $data = $request->all();
            $user = Auth::user();
            
            return response(array('httpStatus'=>201, 'dateTime'=>time(), 'status'=>'success','message' => 'Account data updated successfully'),201);
            
        }catch (\Exception $e){
           return response(array('httpStatus'=>500,"dateTime"=>time(),'status' => 'fail','message' =>$e->getMessage()),500);
        }
    }
}
