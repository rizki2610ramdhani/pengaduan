<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($guard == "masyarakat" && Auth::guard($guard)->check()) {
                return redirect('/masyarakat-dashboard');
            } else if ($guard == "petugas" && Auth::guard($guard)->check()) {
                if (auth()->guard('petugas')->user()->level == 'admin') {
                    return redirect('/admin-dashboard');
                } else if (auth()->guard('petugas')->user()->level == 'petugas') {
                    return redirect('/petugas-dashboard');
                }
            }
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        return $next($request);
    }
}
