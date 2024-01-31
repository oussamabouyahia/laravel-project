<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {  $auth=true;
        if($auth){
            // dd ('authorised user ');
            return $next($request);
        }
        else {return response()->json(["error"=>'not authenticated'],401);}

    }
}
