<?php

namespace CMS\Http\Middleware;

use Closure;
use CMS\Role;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $role = Role::findOrFail(Auth::user()->role_id);
        if (!($role->name === 'admin')) {
            return redirect('/home');
        }
        return $next($request);
    }
}
