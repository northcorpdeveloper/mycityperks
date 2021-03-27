<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Team;
use Auth;
use App\Models\Product;
use App\Models\Popular_category;
use DB;
use App\Quotation;
class DashboardController extends Controller
{
    public function index()
    {
        //$routeName = Route::currentRouteName();							
	$userId= Auth::user()->id;
                                                         
                                                         
        $PopularCategory = DB::table('tbl_category')->get();
        $content_createrData = DB::table('users')->where('id','!=',$userId)->where('user_type',1)->get();
        $allcount = Product::count();
        //$productList = DB::table('products')->join('users', 'users.id', '=', 'products.user_id')->select('products.*', 'users.name as username')->limit(8)->get()->toArray();
        
        //$data=array('aa','ss');      
        return view('user.dashboard.index', compact('PopularCategory','content_createrData','allcount'));
    }
}
