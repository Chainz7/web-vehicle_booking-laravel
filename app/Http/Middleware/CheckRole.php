<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (Auth::user()->role_id != $role) {
            return redirect()->intended('/');
        }

        return $next($request);
    }
}
