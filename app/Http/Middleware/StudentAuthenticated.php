<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class StudentAuthenticated
{
    public function handle($request, Closure $next)
    {
        if( Auth::check() )
        {
            if ( Auth::user()->hasRole('admin') ) {
                return redirect(route('adashboard'));
            }
            else if (Auth::user()->hasRole('teacher')) {
                return redirect(route('tdashboard')); 
            }
            else if ( Auth::user()->hasRole('student') ) {
                return $next($request);
            }
        }
        abort(403);
    }
}
