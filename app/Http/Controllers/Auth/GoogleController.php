<?php
  
namespace App\Http\Controllers\Auth;
use App\Passport\Passport;  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        
       // die("redirectToGoogle");
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('email', $user->email)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('user/dashboard');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => md5('123456789'),
                    'user_type'=>1
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('user/dashboard');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}