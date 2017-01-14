<?php

namespace App\Http\Middleware;

use Closure;

class CurrentPageMiddleware
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
        view()->share('current', $request->route()->getName());
        return $next($request);
    }
}
