<?php
 namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
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
//            $data = $request->all();
//            $user = Auth::user();
//            $user_data = User::where('id',$user->id)->first();
//            $data = array('user_data'=>$user_data);      
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
            //$user_data = User::where('id',$user->id)->first();
            $data = $request->all();
            $money_amount=$user->money;
            $escrow_balance=$user->escrow_balance;
            $user_name=$user->username;
            $user_email=$user->email;
            $amount=$data['amount'];
            $totalcapitalamount=$amount+$money_amount;

            // Generate a unique merchant site transaction ID.
            $transactionId = rand(100000000, 999999999);
 
            $response = $this->gateway->authorize([
                'amount' => $request->input('amount'),
                'currency' => 'USD',
                'transactionId' => $transactionId,
                'card' => $creditCard,
            ])->send();
 
            if($response->isSuccessful()) {
 
                // Captured from the authorization response.
                $transactionReference = $response->getTransactionReference();
 
                $response = $this->gateway->capture([
                    'amount' => $request->input('amount'),
                    'currency' => 'USD',
                    'transactionReference' => $transactionReference,
                    ])->send();
 
                $transaction_id = $response->getTransactionReference();
                $amount = $request->input('amount');
 
                // Insert transaction data into the database
                $isPaymentExist = Payment::where('transaction_id', $transaction_id)->first();
 
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->transaction_id = $transaction_id;
                    $payment->payer_email = $user->email;
                    $payment->amount = $request->input('amount');
                    $payment->currency = 'USD';
                    $payment->payment_status = 'Captured';
                    $payment->user_id = $user->id;
                    $res=$payment->save();
                    
                    if($res){
                        $updateArray = array('money'=>$totalcapitalamount);
                        User::where('id',$user->id)->update($updateArray);
                    }
                    
                    
                }
 
                return "Payment is successful. Your transaction id is: ". $transaction_id;
            } else {
                // not successful
                return $response->getMessage();
            }
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
}
