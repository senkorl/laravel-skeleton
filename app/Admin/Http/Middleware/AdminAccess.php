<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAccess
{
    public function handle(Request $request, Closure $next)
    {
        \abort_if(\auth()->guest() || $request->user()->isNotAdmin(), 403, '非法访问！');

        return $next($request);
    }
}
