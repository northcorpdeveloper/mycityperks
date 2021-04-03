<?php
namespace App\Http\Controllers\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Quotation;
use Response;
use App\Models\Withdraw;
use App\Models\Transaction;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class WithdrawController extends Controller
{
    public function index(){   
        $userId= Auth::user()->id;
        $withdrawsData = DB::table('tbl_withdraws')->where('user_id',$userId)->get()->toArray();
        return view('customer.withdraw.index', compact('withdrawsData'));
    }  
    
    public function withdrawal(){
       
       return view('customer.withdraw.withdrawal');
       
    }
    
    public function save_widhdrawal(Request $request){
        
        try{
            $data = $request->all();
            $user = Auth::user();
            
               $user_id=$user->id;
               $money_amount=$user->money;
               $escrow_balance=$user->escrow_balance;
               $user_name=$user->username;
               $user_email=$user->email;
               $amount=$data['amount'];
               
               if($amount > $money_amount)
                {
                   $msg="Amount greater than from your available Balance"; 
                  return redirect('customer/withdrawal')->with('message', $msg);
                }else{

                $totalcapitalamount=$money_amount-$amount;
                $updateArray = array('money'=>$totalcapitalamount);
                User::where('id',$user->id)->update($updateArray);
            
                $account='Stripe';
                $amount1=$data['amount'];
                $withdrawal_id=rand();	
            
                
                $Withdrawal = new Withdraw;
                
                $Withdrawal->amount = $amount1;
                $Withdrawal->type = 'withdraw';
                $Withdrawal->transactionid = $withdrawal_id;
                $Withdrawal->datenew = date('Y-m-d');
                $Withdrawal->account = $account;
                $Withdrawal->user_id = $user_id;
                $Withdrawal->created_at = date('Y-m-d h:i:s');
                $Withdrawal->updated_at = date('Y-m-d h:i:s');
                $res=$Withdrawal->save();
                    
                    
                 
                $payment = new Transaction;
                    $payment->user_id = $user->id;
                    $payment->type = 'withdrawal';
                    $payment->transaction_id = $withdrawal_id;
                    $payment->datenew = date('Y-m-d');
                    $payment->amount = $amount;
                    $payment->transactions_type = '1';
                    $res=$payment->save();

                
                $msg="Your withdrawal request has been sent successfully"; 
                  return redirect('customer/withdrawal')->with('message', $msg);
            
                }
            
        }catch (\Exception $e){
            
            $msg=$e->getMessage();
            return redirect('customer/withdrawal')->with('message', $msg);
        }
        
        
        
        
    }
    
    
    
    
}