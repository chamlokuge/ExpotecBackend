<?php

namespace App\Http\Middleware;
use App\Http\Controllers\AdminController;

use Closure;

class HasPermission_Admin
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
        $adminController = new AdminController;
        if(!$adminController->hasPermission([3,4])){
          return redirect()->back();
        }
        return $next($request);
    }
}