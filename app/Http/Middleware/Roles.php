<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Auth;
use Closure;
use App\Role;

class Roles {
  public function handle($request, Closure $next, ... $roles) {

    if ( Auth::user()->roles->name == 'Administrator' ) {
      return $next($request);
    }

    foreach ( $roles as $role ) {
      if (strpos($role, Auth::user()->roles->name) !== false) {
        return $next($request);
      }
      else {
        return redirect('login');
      }
    }

  }
}
