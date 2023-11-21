<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request; // Make sure to import the correct Request class

class AdminMiddleware
{
public function handle(Request $request, Closure $next)
{
    if (auth()->check()) {
        if (auth()->user()->is_admin) {
            return $next($request);
        } else {
            dd('User is not an admin.'); // Debug statement
        }
    } else {
        dd('User is not authenticated.'); // Debug statement
    }

    abort(403, 'Unauthorized');
}


}

