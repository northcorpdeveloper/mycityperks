<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Team;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data=array('aa','ss');      
        return view('user.dashboard.index', compact('data'));
    }
}
