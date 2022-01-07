<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Member
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->inRole('member')) {
            return $next($request);
        }

        abort(401);
    }
}
