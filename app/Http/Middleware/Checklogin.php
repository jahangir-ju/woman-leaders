<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class Checklogin
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
        $this->AdminAuthCheck();
        return $next($request);
    }
      private function AdminAuthCheck()
    {

        $role = auth()->user()->role;
        if ($role != 1) {
            return Redirect()->route('home')->send();
        }
    }

}
