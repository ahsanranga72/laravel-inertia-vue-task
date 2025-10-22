<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $permission): Response
    {
        $user = $request->user();

        $required = preg_split('/[\|,]+/', $permission);

        foreach ($required as $perm) {
            if ($user->hasPermission(trim($perm))) {
                return $next($request);
            }
        }

        abort(403, 'You do not have access to this resource.');
    }
}
