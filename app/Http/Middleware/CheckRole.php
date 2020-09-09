<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$Role)
    {

        if (in_array($request->user()->role_id,$Role))
        {
           return $next($request);
        }
        return redirect('/home');
        
    }

   
        
}


