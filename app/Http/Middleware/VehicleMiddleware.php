<?php

namespace App\Http\Middleware;

use Closure;

class VehicleMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('chosen_vehicle')) {
            return redirect()->route('vehicle.index')->withErrors(['Please choose a vehicle first']);
        }
        return $next($request);
    }
}
