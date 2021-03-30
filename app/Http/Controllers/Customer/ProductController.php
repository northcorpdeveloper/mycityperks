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
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;



class ProductController extends Controller
{
    public function index()
    {   
        $userId= Auth::user()->id;
        $productCategory = DB::table('tbl_category')->get();
        
        $allcount = Product::count();
        $productData = DB::table('products')->join('tbl_category', 'tbl_category.id', '=', 'products.product_category')->select('products.*', 'tbl_category.category_name')->where('products.user_id',$userId)->limit(8)->get()->toArray();
        //$productData = DB::table('products')->get();
        return view('customer.product.list', compact('productCategory','productData','allcount'));
    }
    
    public function addproduct()
    {    
        $productCategory = DB::table('tbl_category')->get();   
        return view('customer.product.addproduct', compact('productCategory'));
    }
    
    public function create(Request $request){
           $userId= Auth::user()->id;
           
            $rules = [
                'name' => 'required',
		];
	    $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
                    //echo "step1";
			return redirect('customer/addproduct')
			->withInput()
			->withErrors($validator);
		}
		else{
                    $data = $request->input();
			try{
			    $product = new Product;
                            $product->name = $data['name'];
                            $product->product_category = $data['product_category'];
                            $product->image = $data['image'];
                            $product->price = $data['price'];
                            $product->description = $data['description'];
                            $product->type = $data['type'];
                            $product->sub_type = $data['sub_type'];
                            $product->fechadefinalizacion = date('Y-m-d');
                            $product->status = 'Active';
                            $product->user_id = $userId;
                            $product->sub_date = date('Y-m-d');
			    $product->save();
                            
			    return redirect('customer/addproduct')->with('status',"Insert successfully");
			}
                        //`id`, `name`, `product_category`, `image`, `price`, `description`, `fechadefinalizacion`, `status`, `user_id`, `type`, `sub_type`, `is_deleted`, `sub_date`
			catch(Exception $e){
			    return redirect('customer/addproduct')->with('failed',"operation failed");
			}
		}
    }
    
    public function getProductData(Request $request)
    {  
        $userId= Auth::user()->id;
        $data = $request->all();
        $row = $data['row'];
        $rowperpage = 8;
        $productData = DB::table('products')->join('tbl_category', 'tbl_category.id', '=', 'products.product_category')->select('products.*', 'tbl_category.category_name')->where('products.user_id',$userId)->offset($row)->limit($rowperpage)->get()->toArray();
        //$productList = DB::table('products')->join('users', 'users.id', '=', 'products.user_id')->select('products.*', 'users.name as username')->offset($row)->limit($rowperpage)->get();
        return Response::json($productData);
    } 
    
    
    
    
}


