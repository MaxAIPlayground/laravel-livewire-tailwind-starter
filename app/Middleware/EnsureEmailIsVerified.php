<?php

namespace App\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class EnsureEmailIsVerified
{
    // We are overriding this method to redirect to 'login'
    // instead of 'register'. Default is register.
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if (! $request->user() ||
            ($request->user() instanceof MustVerifyEmail &&
            ! $request->user()->hasVerifiedEmail())) {
            return $request->expectsJson()
                    ? abort(403, 'Your email address is not yet verified.')
                    : Redirect::guest(URL::route('verification.notice'));
        }

        return $next($request);
    }
}
