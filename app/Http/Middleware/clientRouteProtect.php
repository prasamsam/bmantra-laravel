<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class clientRouteProtect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = 'client')
    {
        if(Auth::guard($guard)->guest()){
            if($request->expectsJson()){
                return response('Unauthorised.', 401);
            }else{
                return redirect()->route('user-login');
            }
        }

        return $next($request);
    }
}
