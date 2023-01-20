<?php

namespace App\Http\Middleware;

use Closure;

class MonitoringMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('chosen_approver')) {
            return redirect()->route('approver.index')->withErrors(['Please choose a approver']);
        }
        return $next($request);
    }
}
