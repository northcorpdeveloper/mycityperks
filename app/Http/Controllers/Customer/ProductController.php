<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProductController extends Controller
{
    public function index()
    {    
        $data=array('aa','ss');      
        return view('customer.product.list', compact('data'));
    }
    
    public function addproduct()
    {    
        $data=array('aa','ss');      
        return view('customer.product.addproduct', compact('data'));
    }
    
}


