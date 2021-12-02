<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //accion par amostar el formulario del login
    public function form(){
        return view('auth.login');
    }
    //verificar si elusuario esta registrado en BD

    public function login(Request $request){

       //attempt Consulta EN BD si existe el usurio con email y password ingresados

      if( Auth::attempt(['email' => $request->input('name'),
        'password' => $request->input('password')]) && Auth::check() && Auth::user()->idRolFK== '1') {
    //usuario autenticado
        return redirect()->route('Pedidos.index');

        }else if(Auth::check() && Auth::user()->idRolFK== '4'){
            return redirect('/');

        }else if ( Auth::check() && Auth::user()->idRolFK== '3'){
            return redirect()->route('Pedidos.index');
        }else if ( Auth::check() && Auth::user()->idRolFK== '2'){
            return redirect()->route('Pedidos.index');
        }
        else{
            //usuario no autenticado
            return redirect()->route('login.form')->with('mensajeerror', "Usuario no reconocido");
            }


    }

    //accion para cerrar sesion
    public function logout(){
     //metodo logout cierra estado de sesion de usuario
        Auth::logout();
    //redirigir al login
    return redirect()->route('login.form')->with('mensaje_exito' , "Sesion cerrada correctamente");
    }


    public function perfil(){
        return view('pagina.my-account');
    }
}
