<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfSchoolCollegeVersity
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'school_college_versity')
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('schoolcollegeversity.dashboard');
        }

        return $next($request);
    }

}
