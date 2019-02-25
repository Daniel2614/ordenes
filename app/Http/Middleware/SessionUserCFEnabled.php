<?php

namespace App\Http\Middleware;

use Closure;

class SessionUserCFEnabled
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
       if (!$request->session()->exists('fuserenabled')) {
            return redirect('/login');
        }
        return $next($request);
    }
}
