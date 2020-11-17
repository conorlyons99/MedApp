<?php
# @Date:   2020-11-17T01:55:53+00:00
# @Last modified time: 2020-11-17T02:19:41+00:00




namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(!$request->user() || !$request->user()->authorizeRoles($roles)){
          return redirect()->route('home');
        }
        return $next($request);
    }
}
