<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClientesSesiones
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
        if (Auth::check() && Auth::user()->idRolFK == 4) {
            return $next($request);
            return redirect('carrito');
        }else{
            return redirect()->route('login.verify')->with('mensaje' , "Debes iniciar sesion");
        }

    }
}
