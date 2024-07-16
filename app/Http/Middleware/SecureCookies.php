<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;

class SecureCookies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $xsrfToken = $request->cookie('XSRFTOKEN');

        if ($xsrfToken) {
            Cookie::queue(Cookie::make('XSRFTOKEN', $xsrfToken, 60, null, null, true, true, false, 'Lax'));
        }

        return $response;
    }
}
