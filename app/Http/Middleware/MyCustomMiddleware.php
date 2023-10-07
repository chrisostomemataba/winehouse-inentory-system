<?php

namespace App\Http\Middleware;

use Closure;

class MyCustomMiddleware
{
    public function handle($request, Closure $next)
    {
        // Actions before the request is handled
        // For example, perform user authentication
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Continue handling the request
        $response = $next($request);

        // Actions after the request is handled
        // For example, add a custom HTTP header to the response
        $response->headers->set('X-Custom-Header', 'Middleware Example');

        return $response;
    }
}
