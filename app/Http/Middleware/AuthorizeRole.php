<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class AuthorizeRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string ...$roles)
    {
        $hasAnyRole = $request->user()->roles()->pluck('name')->intersect($roles)->isNotEmpty();

        if (!$hasAnyRole) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}