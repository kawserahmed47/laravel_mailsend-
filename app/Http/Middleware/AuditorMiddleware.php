<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AuditorMiddleware
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
        if(Auth::guard('admin')->check() && (Auth::guard('admin')->user()->role ==1 || Auth::guard('admin')->user()->role ==4) ){
            return $next($request);

       }else{
           return redirect()->route('adminLogin');
       }
    }
}
