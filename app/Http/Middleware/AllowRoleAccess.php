<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllowRoleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (! $request->user()->hasAnyRole($role)) {
            match($role) {
                'admin' => abort(Response::HTTP_FORBIDDEN),
                'staff' => abort(Response::HTTP_FORBIDDEN),
                'user' => abort(Response::HTTP_UNAUTHORIZED),
                'default' => abort(Response::HTTP_UNAUTHORIZED)
            };
        }
        return $next($request);
    }
}
