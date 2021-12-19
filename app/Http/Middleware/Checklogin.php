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

        $admin_id = Session::get('id');
        if (!$admin_id) {
            return Redirect()->route('login')->send();
        }
    }

}
