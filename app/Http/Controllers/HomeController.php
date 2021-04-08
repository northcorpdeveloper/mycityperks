<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Response;
use Illuminate\Http\Request; 
use App\Models\Product;
use App\Models\Popular_category;

use App\Models\HomeCategory;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $PopularCategory = DB::table('tbl_category')->get();
        $allcount = Product::count();
        $productList = DB::table('products')->join('users', 'users.id', '=', 'products.user_id')->select('products.*', 'users.name as username')->limit(8)->get()->toArray();
       
        $homeCatArrayData = HomeCategory::select('name','id', 'cat_key')->where('order','<=', '4')->get();	       
        $homeCatMoreArrayData = HomeCategory::select('cat_key','name','id')->where('order','>', '4')->get();	 
        return view('home',compact('productList','allcount','PopularCategory','homeCatArrayData','homeCatMoreArrayData'));
    }
    
    
    public function getData(Request $request)
    { 
        $data = $request->all();
        $row = $data['row'];
        $rowperpage = 8;
        $html = '';
        $productList = DB::table('products')->join('users', 'users.id', '=', 'products.user_id')->select('products.*', 'users.name as username')->offset($row)->limit($rowperpage)->get();
        return Response::json($productList);
    }  
    
    
    
    
}
