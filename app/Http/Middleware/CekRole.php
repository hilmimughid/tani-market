<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        foreach ($roles as $role) {
            if (Auth::user()->role == $role) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
