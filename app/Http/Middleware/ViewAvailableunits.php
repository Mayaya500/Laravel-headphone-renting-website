<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewAvailableunits
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
