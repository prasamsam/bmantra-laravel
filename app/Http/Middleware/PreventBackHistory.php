<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard=null)
    {
        if(Auth::guard('client')->guest()){
            if($request->wantsJson()){
                return response('Unauthenticated', 401);
            }else{
                return redirect()->guest('login');
                }
        }
        $response = $next($request);

        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')

            ->header('Pragma','no-cache')

            ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
