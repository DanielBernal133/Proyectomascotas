<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CLienteMiddleware
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
        if(Auth::check() && Auth::user()->idRolFK== '4'){
            return $next($request);
            return redirect('cliente');
        }else{
            return redirect()->route('login.verify')->with('mensaje' , "Crea una cuenta para poder disfrutar de todos los servicios");
        }
    }
}
