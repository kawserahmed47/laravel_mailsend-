<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use  Illuminate\Support\Facades\Redirect;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if(Auth::guard('admin')->check() && (Auth::guard('admin')->user()->role ==1) ){
             return $next($request);

        }else{
            return redirect()->route('adminLogin');
        }
    }
}
