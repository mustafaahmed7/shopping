<?php

namespace App\Http\Middleware;

use Closure;
use  \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RolesMiddleware
{
    public function handle ($request, Closure $next)
    {
        if (Session::get('role') == null) {
            if (Auth::check()) {
                $role = Auth::user()->roles()->first();
                Session::put('role', $role);
            }
        }
        if (Auth::check() && Session::get('role')->roleName == "Admin") {
            return $next($request);
        }
        return redirect('/login');
    }
}
