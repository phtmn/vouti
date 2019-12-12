<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Auth;

class AuthenticateCabo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (! Auth::guard('cabo')->check()):
            return redirect()->route('cabo.session.login');
        endif;

        // Define guard to use
        Auth::shouldUse($guard);

        return $next($request);
    }
}
