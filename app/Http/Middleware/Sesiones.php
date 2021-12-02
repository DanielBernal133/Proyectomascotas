<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Sesiones
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
        if(Auth::check() && Auth::user()->idRolFK== '1'){
            return $next($request);
            return redirect('Pedidos');
        }else if (Auth::check() && Auth::user()->idRolFK== '4') {
            return redirect('/');

        }else if ( Auth::check() && Auth::user()->idRolFK== '3'){
            return $next($request);
            return redirect('Pedidos');
        }else if ( Auth::check() && Auth::user()->idRolFK== '2'){
            return $next($request);
            return redirect()->route('Pedidos.index');
        }
        else{
            return redirect()->route('login.verify')->with('mensajeerror' , "Debes iniciar sesion");
        }
    }
}
