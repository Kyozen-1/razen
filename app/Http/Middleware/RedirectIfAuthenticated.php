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
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        switch($guard)
        {
            case 'razen':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('razen.dashboard.index');
                }
            case 'razen_studio':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('razen-studio.admin.dashboard.index');
                }
            case 'razen_project':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('razen-project.admin.dashboard.index');
                }
        }

        return $next($request);
    }
}
