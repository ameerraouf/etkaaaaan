<?php
namespace App\Http\Middleware;
use Closure;
class Admin
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
       if(!auth()->user())
       {
        return redirect(app('aurl').'/login');
       }elseif(auth()->user()->level == 'admin' and auth()->user()->active == 1)
       {
         return $next($request); 
       }else{
         return redirect('404');
       }
    }
}
