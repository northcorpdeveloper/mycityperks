<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MyaccountController extends Controller
{
    public function index()
    {    
        $data=array('aa','ss');      
        return view('customer.myaccount.index', compact('data'));
    }
}
