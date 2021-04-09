<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use Response;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {  
        $userId= Auth::user()->id;
        $all_users = DB::table('users')->where('id', '!=',$userId)->get()->toArray();
    
        return view('admin.user.list', compact('all_users'));
    }
    
     public function updateStatus(Request $request){
           
         try{
            $data = $request->all();
            $user = Auth::user();	
            $user = User::find($request->id)->update(['status' => $request->status]);

           // return response()->json(['success'=>'Status changed successfully.']);
            return response(array('httpStatus'=>200, 'dateTime'=>time(), 'status'=>'success','message' => 'Status changed successfully.'),200);
            
        }catch (\Exception $e){
           return response(array('httpStatus'=>500,"dateTime"=>time(),'status' => 'fail','message' =>$e->getMessage()),500);
        }
         
         
     }
    
    
}
