<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //accion par amostar el formulario del login
    public function form(){
        return view('auth.login');
    }
    //verificar si elusuario esta registrado en BD

    public function login(Request $request){

       //attempt Consulta EN BD si esxiste el usurio con emial y password ingresados
        if( Auth::attempt(['email' => $request->input('name'),
        'password' => $request->input('password')]) && Auth::check() && Auth::user()->idRolFK== '1') {
            //usuario autenticado
            $enespera = DB::table('pedido')->where('estadoPedido', 'En Espera')->exists();
                if($enespera){
                    //echo "Pedido por validadar";
                    return redirect()->route('Pedidos.index')->with('mensaje' , "Tienes pedidos por confirmar ¡Revise lo pedidos!, tienes entre 24/48 horas para confirmarlos");
                }
                else{
                    return redirect()->route('Pedidos.index');
                }
        }else if(Auth::check() && Auth::user()->idRolFK== '4'){
            return redirect('/');
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

        $producto = Pedido::where('idClienteFK' , '=' , Auth::user()->idUsuario)->get();
        $nombreproduc = DB::table('pedidodeproducto')
                                     ->join('pedido', 'pedidodeproducto.idPedidoFK', '=', 'pedido.idPedido')
                                     ->join('producto', 'pedidodeproducto.idProductoFK', '=', 'producto.idProducto')
                                     ->select('pedidodeproducto.*', 'pedido.*', 'producto.*')
                                     ->where('idClienteFK', Auth::user()->idUsuario)
                                     ->get();
        return view('pagina.my-account')->with('detalles' , $producto)->with('detaller' , $nombreproduc);
    }
}
