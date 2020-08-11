<?php


namespace Roocket\Cms\Http\Middleware;
use Closure;

class Admin
{
    public function handle($request , Closure $next,$protected = null)
    {
        if ($protected == null)
            return redirect('/');
         return $next($request);
    }
}