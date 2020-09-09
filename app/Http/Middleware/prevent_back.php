<?php

namespace App\Http\Middleware;

use Closure;

class prevent_back
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
        $response = $next($request);
        return $response->header('Cache-Control','nocache, no-store , max-age=0, must-revalidate')
        ->header('preagma','no-cache')
        ->header('expires','fri, 01 jan 1990 00:00:00 GMT');
    }
}
