<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckStatus
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
        if (Auth::user()->role == 'admin') {
            return redirect('/admin');
        } elseif (Auth::user()->role == 'user') {
            return redirect('/dashboard');
        
        }

        return $next($request);
    }
}
