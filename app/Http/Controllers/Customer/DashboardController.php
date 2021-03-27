<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {  
        $data=array('aa','ss');      
        return view('customer.dashboard.index', compact('data'));
    }
}
