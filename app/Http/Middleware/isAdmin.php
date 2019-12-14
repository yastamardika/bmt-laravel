<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin{
    /**
     * Handle Incoming request
     *
     * @param \Illuminate\Http\Request
     * @param \Closure $next
     * @return mixed
    */

    public function handle($request, Closure $next)
    {
        if (auth()->check() && $request->user()->admin == 0) {
            return redirect()->guest('home');
        }
        return $next($request);
    }
}
