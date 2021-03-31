<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Quotation;
use Response;
use App\Models\Product;
use App\Models\Popular_category;
use App\Models\Order;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;



class OrderController extends Controller
{
    public function index(){   
        $userId= Auth::user()->id;
        $user_type= Auth::user()->user_type;
        
        $productCategory = DB::table('tbl_category')->get();
        if($user_type == 1){
            $orderData = DB::table('tbl_orders')->join('users', 'users.id', '=', 'tbl_orders.user_id')->select('tbl_orders.*', 'users.name')->where('tbl_orders.user_id',$userId)->get()->toArray();
           //$orderData = DB::table('tbl_orders')->where('user_id',$userId)->get()->toArray();   
        }
        if($user_type == 2){
           //$productCategory = DB::table('tbl_orders')->where('vendor_id',$userId)->get();
            $orderData = DB::table('tbl_orders')->join('users', 'users.id', '=', 'tbl_orders.vendor_id')->select('tbl_orders.*', 'users.name')->where('tbl_orders.vendor_id',$userId)->get()->toArray();
        }
        $allcount = Order::where('user_id',$userId)->where('status',1)->count();
        //$productData = DB::table('products')->join('tbl_category', 'tbl_category.id', '=', 'products.product_category')->select('products.*', 'tbl_category.category_name')->where('products.user_id',$userId)->where('products.status',1)->get()->toArray();
        return view('customer.order.list', compact('orderData','allcount'));
    }

    
}




