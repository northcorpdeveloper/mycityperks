<?php

namespace App\Http\Controllers\Auth;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    
    protected function authenticated(Request $request, $user)
    {  if($user->user_type ==''){ $user->user_type =1;}
        switch ($user->user_type) {
            case '1':
                $this->redirectTo = 'user/dashboard';
                break;
            case '2':
                $this->redirectTo = 'customer/dashboard';
                break;
            case '3':
                $this->redirectTo = 'admin/dashboard';
                break;
        }

        return redirect($this->redirectTo);
    }
    
    
  protected function loggedOut(Request $request) {
    return redirect('/home');
}

}
