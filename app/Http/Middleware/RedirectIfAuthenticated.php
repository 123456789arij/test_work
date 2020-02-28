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
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
 /*   public function handle($request, Closure $next, $guard = null)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        switch ($guard) {
            case 'employee' :
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('employee.Login');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::HOME);
                }
                break;
        }
        return $next($request);
    }*/

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }

}
