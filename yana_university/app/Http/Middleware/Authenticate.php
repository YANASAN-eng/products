<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    public function handle(Request $request,Closer $next, ...$guards){
        $guards = empty($guards) ? [null] : $guards;
        foreach($guards as $guard){
            if($guard == "admin" && Auth::guard($guard)->check()){
                return redirect('admin/home');
            }
            if(Auth::guard($guard->check())){
                return redirect(RouteServiceProvider::HOME);
            }
        }
        return $next($request);
    }
}
