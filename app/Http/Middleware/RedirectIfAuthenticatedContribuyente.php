<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RedirectIfAuthenticatedContribuyente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guard = $guards[0] ?? 'contribuyente';
        if (Auth::guard($guard)->check()) {
            return redirect()->route('contribuyente.dashboard'); // Ajusta esta ruta según tu necesidad
        }

        return $next($request);
    }
}
