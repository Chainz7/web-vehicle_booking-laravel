<?php

namespace App\Http\Middleware;

use Closure;

class DriverMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('chosen_driver')) {
            return redirect()->route('driver.index')->withErrors(['Please choose a driver first']);
        }
        return $next($request);
    }
}
