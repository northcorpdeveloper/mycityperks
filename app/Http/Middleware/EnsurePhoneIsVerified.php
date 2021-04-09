<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class EnsurePhoneIsVerified
{ 
   
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        
       // print_r($user); die;
        
        if ($user->is_verification == 0) {
            
            return redirect('customer/myaccount')->with('message', 'Plz Phone Verify First !!!');
        }
        
        return $next($request);
    }
}
