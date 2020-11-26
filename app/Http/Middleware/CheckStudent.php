<?php

namespace App\Http\Middleware;

use App\Models\Rol;
use Closure;
use Auth;

class CheckStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->tipo_usr === Rol::Externo || $user->tipo_usr === Rol::Interno) {
            return $next($request);
        }
        abort(403, "Sin autorización");
    }
}
