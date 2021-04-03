<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Quotation;
use Response;
use App\Models\Product;
use App\Models\Popular_category;
use Auth;
use Validator;
use Illuminate\Validation\Rule;





class SubscriptionController extends Controller
{
    public function index(){   
        $userId= Auth::user()->id;
        $productCategory = DB::table('tbl_category')->get();
        $allcount = Product::where('user_id',$userId)->where('type','subscriptions')->where('status',1)->count();
        $productData = DB::table('products')->join('tbl_category', 'tbl_category.id', '=', 'products.product_category')->select('products.*', 'tbl_category.category_name')->where('type','subscriptions')->where('products.user_id',$userId)->where('products.status',1)->limit(8)->orderBy('id', 'DESC')->get()->toArray();
        return view('customer.subscriptions.list', compact('productCategory','productData','allcount'));
    }
    
   
    public function getProductData(Request $request){  
        $userId= Auth::user()->id;
        $data = $request->all();
        $row = $data['row'];
        $rowperpage = 8;
        $productData = DB::table('products')->join('tbl_category', 'tbl_category.id', '=', 'products.product_category')->select('products.*', 'tbl_category.category_name')->where('products.status',1)->where('products.user_id',$userId)->offset($row)->limit($rowperpage)->orderBy('id', 'DESC')->get()->toArray();
        return Response::json($productData);
    } 

}


