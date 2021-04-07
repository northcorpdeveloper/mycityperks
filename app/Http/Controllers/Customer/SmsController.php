<?php
namespace App\Http\Controllers\Customer;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Response;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;

class SmsController extends Controller
{
    public function sendSms()
    {
        $accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
        $authToken  = config('app.twilio')['TWILIO_AUTH_TOKEN'];
        $appSid     = config('app.twilio')['TWILIO_APP_SID'];
        $client = new Client($accountSid, $authToken);
        try
        {
            $otpcode = "1234";
            $client->messages->create(
            // the number you'd like to send the message to
                '+918700761707',
           array(
                 // A Twilio phone number you purchased at twilio.com/console
                 'from' => '+12673961067',
                 // the body of the text message you'd like to send
                 'body' => 'Verification Code is '.$otpcode
             )
         );
   }
        catch (Exception $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }
}