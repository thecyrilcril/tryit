<?php

declare(strict_types=1);

namespace App\Http\Middleware\Payments;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WhitelistMonnifyIPAddresses
{
    private array $whitelistedIps = [
        '35.242.133.146',
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (\App::environment('production')) {
            if (!in_array($request->ip(), $this->whitelistedIps)) {
                abort(403);
            }
        }
        return $next($request);
    }
}
