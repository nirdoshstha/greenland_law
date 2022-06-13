<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->user_role=="1")
        {
            if(Auth::check() && Auth::user()->ban_unban){
                $banned = Auth::user()->ban_unban=="1";
                Auth::logout();

                if($banned=='1'){
                    $message = 'Your Account has been banned, pls contact Admin';
                }
                return redirect('/login')->with('status',$message)->withErrors(['email'=>'Your account has been banned, pls contact Administration']);
            }
            return $next($request);
        }
        else{
            return redirect('/home')->with('status','You are not allowed to access Manager Dashboard');
        }

    }
}
