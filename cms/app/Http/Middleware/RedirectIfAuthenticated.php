<?php

namespace CMS\Http\Middleware;

use Closure;
use CMS\Role;
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
        if (Auth::guard($guard)->check()) {
            $role = Role::findOrFail(Auth::user()->role_id);
            if ($role->name === 'admin') {
                return redirect('/admin');
            }
            return redirect('/home');
        }

        return $next($request);
    }
}
