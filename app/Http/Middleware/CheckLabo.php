<?php

namespace App\Http\Middleware;

use App\Models\Rol;
use Closure;
use Auth;

class CheckLabo
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
        if ($user->tipo_usr === Rol::Laboratorista) {
            return $next($request);
        }
        abort(403, "Sin autorización");
    }
}
