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
    public function index(){   
        $userId= Auth::user()->id;
        $productCategory = DB::table('tbl_category')->get();
        $allcount = Product::where('user_id',$userId)->where('status',1)->count();
        $productData = DB::table('products')->join('tbl_category', 'tbl_category.id', '=', 'products.product_category')->select('products.*', 'tbl_category.category_name')->where('products.user_id',$userId)->where('products.status',1)->limit(8)->get()->toArray();
        return view('customer.product.list', compact('productCategory','productData','allcount'));
    }
    
    public function addproduct(){    
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
            return redirect('customer/addproduct')
            ->withInput()
            ->withErrors($validator);
	}else{
                $data = $request->input();
                $request->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',]);
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('assetcityfront/images'), $imageName);
                try{
                    $product = new Product;
                    $product->name = $data['name'];
                    $product->product_category = $data['product_category'];
                    $product->image = $imageName;
                    $product->price = $data['price'];
                    $product->description = $data['description'];
                    $product->type = $data['type'];
                    $product->sub_type = $data['sub_type'];
                    $product->fechadefinalizacion = date('Y-m-d');
                    $product->user_id = $userId;
                    $product->sub_date = date('Y-m-d');
                    $product->save();        
                    return redirect('customer/addproduct')->with('status',"Insert successfully");
                }catch(Exception $e){
                    return redirect('customer/addproduct')->with('failed',"operation failed");
                }
	    }
    }
    
    public function editproduct_by_id(Request $request){
        $userId= Auth::user()->id;
        $data=$request->all();
        $PID=$data['id']; 
        $products = Product::find($PID);
        $productCategory = DB::table('tbl_category')->get(); 
        return view('customer.product.edit', compact('productCategory','products')); 
    }
    
    public function editProduct(Request $request){
        $userId= Auth::user()->id;
        $data=$request->all();
        $PID=$data['productID']; 
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
    
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assetcityfront/images'), $imageName);
        $product = Product::find($PID);
        $product->name = $data['name'];
        $product->product_category = $data['product_category'];
        $product->image =  $imageName;
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->type = $data['type'];
        $product->sub_type = $data['sub_type'];
        $product->fechadefinalizacion = date('Y-m-d');
        $product->user_id = $userId;
        $product->sub_date = date('Y-m-d');
        $product->save();
        return redirect()->action([ProductController::class, 'index']);
    }
    
    public function getProductData(Request $request){  
        $userId= Auth::user()->id;
        $data = $request->all();
        $row = $data['row'];
        $rowperpage = 8;
        $productData = DB::table('products')->join('tbl_category', 'tbl_category.id', '=', 'products.product_category')->select('products.*', 'tbl_category.category_name')->where('products.status',1)->where('products.user_id',$userId)->offset($row)->limit($rowperpage)->get()->toArray();
        return Response::json($productData);
    } 
    
    public function deleteProduct(Request $request){  
        $userId= Auth::user()->id;
        $data = $request->all();
        $PID = $data['pid'];
        $deleteData = Product::find($PID);
        $deleteData->status = 0;
        $res=$deleteData->save();
        if($res){
            $msg="Delete Successfully !!";
        }else{
           $msg="Something id Wrong !!" ;
        }
        return Response::json($msg);
    } 
    
    
    
    
    
}


