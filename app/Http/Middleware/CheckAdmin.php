<?php

namespace App\Http\Middleware;

use App\Models\Rol;
use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->tipo_usr === Rol::Admin) {
            return $next($request);
        }
            abort(403, "Sin autorización");
    }
}
