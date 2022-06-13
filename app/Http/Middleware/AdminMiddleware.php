<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::user()->user_role=='2'){
            return $next($request);
        }
        else if(Auth::user()->user_role=='1'){
            return redirect('/manager/dashboard')->with('status','You are only allowed to access Manager Dashboard');
        }
        else if(Auth::user()->user_role=='0')
        {
            return redirect('/home')->with('status','Your are not allowed to access Admin/Manager Dashboard');
        }

    }
}
