<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HstsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->secure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        }

        // Add the X-Content-Type-Options header to the response
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Define your Content-Security-Policy header value here
        $csp = "default-src 'self'; script-src 'self'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self' data:";
        // Add the Content-Security-Policy header to the response
        $response->headers->set('Content-Security-Policy', $csp);

        // Add the X-Frame-Options header to the response
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // Add the Referrer-Policy header to the response
        $response->headers->set('Referrer-Policy', 'no-referrer');

        return $response;
    }
}
