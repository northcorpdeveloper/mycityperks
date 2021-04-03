<?php
 namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Transaction;
use App\Models\User;
use Auth;
use Response;
use Validator;
use Illuminate\Validation\Rule;



class DepositController extends Controller
{
    public $gateway;
  
    public function __construct()
    {
        $this->gateway = Omnipay::create('AuthorizeNetApi_Api');
        $this->gateway->setAuthName(env('ANET_API_LOGIN_ID'));
        $this->gateway->setTransactionKey(env('ANET_TRANSACTION_KEY'));
        $this->gateway->setTestMode(true); //comment this line when move to 'live'
    }
 

    function index(){
            return view('customer.deposit.index');
    }
 
    public function charge(Request $request)
    {
        try {
            $creditCard = new \Omnipay\Common\CreditCard([
                'number' => $request->input('cc_number'),
                'expiryMonth' => $request->input('expiry_month'),
                'expiryYear' => $request->input('expiry_year'),
                'cvv' => $request->input('cvv'),
            ]);
           
            $user = Auth::user();
            $data = $request->all();
            $money_amount=$user->money;
            $escrow_balance=$user->escrow_balance;
            $user_name=$user->username;
            $user_email=$user->email;
            $amount=$data['amount'];
            $totalcapitalamount=$amount+$money_amount;

            $transactionId = rand(100000000, 999999999);
 
            $response = $this->gateway->authorize([
                'amount' => $request->input('amount'),
                'currency' => 'USD',
                'transactionId' => $transactionId,
                'card' => $creditCard,
            ])->send();
            
            if($response->isSuccessful()) {
                $transactionReference = $response->getTransactionReference();
 
                $response = $this->gateway->capture([
                    'amount' => $request->input('amount'),
                    'currency' => 'USD',
                    'transactionReference' => $transactionReference,
                    ])->send();
 
                $transaction_id = $response->getTransactionReference();
                $amount = $request->input('amount');
                $isPaymentExist = Transaction::where('transaction_id', $transaction_id)->first();
 
                if(!$isPaymentExist)
                {
                    $updateArray = array('money'=>$totalcapitalamount);
                    User::where('id',$user->id)->update($updateArray);
                    $payment = new Transaction;
                    $payment->user_id = $user->id;
                    $payment->type = 'deposit';
                    $payment->transaction_id = $transaction_id;
                    $payment->datenew = date('Y-m-d');
                    $payment->amount = $request->input('amount');
                    $payment->transactions_type = '2';
                    $res=$payment->save();
                }
 
 
                $msg="Payment is successful. Your transaction id is: ". $transaction_id;
                return redirect('customer/deposit')->with('message', $msg);
            } else {
                // not successful
                $msg= $response->getMessage();
                
                 return redirect('customer/deposit')->with('message', $msg);
 
            }
        } catch(Exception $e) {
             $msg= $e->getMessage();
            return redirect('customer/deposit')->with('message', $msg);
            
        }
    }
}
