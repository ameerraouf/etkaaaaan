<?php

namespace App\Http\Middleware;

use Closure;

class AdminPerm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$param)
    {
        if(auth()->user()->admin()->first()->$param == 1)
        {   
         return $next($request);
        }else{
         return redirect('404');
        }
    }
}
