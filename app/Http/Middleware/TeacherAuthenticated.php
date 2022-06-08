<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class TeacherAuthenticated
{
    public function handle($request, Closure $next)
    {
        if( Auth::check() )
        {
            if ( Auth::user()->hasRole('admin') ) {
                return redirect(route('adashboard'));
            }
            else if (Auth::user()->hasRole('student')) {
                return redirect(route('sdashboard')); 
            }
            else if ( Auth::user()->hasRole('teacher') ) {
                return $next($request);
            }
        }
        abort(403);
    }
}
