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



class TransactionController extends Controller
{
    public function index(){   
        $userId= Auth::user()->id;
        $transactionData = DB::table('transactions')->where('user_id',$userId)->where('transactions_type',1)->get()->toArray();
        $transactionAuthorizeData = DB::table('transactions')->where('user_id',$userId)->where('transactions_type',2)->get()->toArray();
        return view('customer.transaction.list', compact('transactionData','transactionAuthorizeData'));
    }  
}