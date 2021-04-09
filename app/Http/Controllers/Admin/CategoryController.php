<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CategoryController extends Controller
{
    public function index()
    {  
        
        $userId= Auth::user()->id;
        $all_users = DB::table('users')->where('id', '!=',$userId)->get()->toArray();
    
        return view('admin.category.list', compact('all_users'));
    }
}
