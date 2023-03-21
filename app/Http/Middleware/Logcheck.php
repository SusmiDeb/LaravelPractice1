<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Logcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   

       
        //Session is a class.class use korle doubl colon use hoy(::)
        print_r(\Session::get('logData'));
       
        if(empty(\Session::get('logData')))
        {  
            
            return redirect('/create');
        }
        
        
        return $next($request);
    }
}
