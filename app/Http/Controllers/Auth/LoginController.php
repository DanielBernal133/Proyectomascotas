<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use Illuminate\Support\Facades\DB;
use App\Empleado;
use App\Cliente;


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
            $consulta = DB::table('empleado')->where('idUsuarioFK', Auth::user()->idUsuario)->doesntExist();
            if($consulta){
                return redirect('empleados/create');
            }else{
                $enespera = DB::table('pedido')->where('estadoPedido', 'En Espera')->exists();
                if($enespera){
                    //echo "Pedido por validadar";
                    return redirect()->route('Pedidos.index')->with('mensaje' , "Tienes pedidos por confirmar ¡Revise lo pedidos!, tienes entre 24/48 horas para confirmarlos");
                }
                else{
                    return redirect()->route('Pedidos.index');
                }
            }
            //usuario autenticado
     }else if(Auth::check() && Auth::user()->idRolFK== '4'){
         $consulta = DB::table('cliente')->where('idUsuarioFK', Auth::user()->idUsuario)->doesntExist();
            if($consulta){
                return redirect('perfil')->with('mensaje_war', "Debes completar tus datos faltantes para poder hacer una compra. da click en Registro Datos");

            return redirect('/');
        }else if ( Auth::check() && Auth::user()->idRolFK== '3'){
            $consulta = DB::table('empleado')->where('idUsuarioFK', Auth::user()->idUsuario)->doesntExist();
            if($consulta){
                return redirect('empleados/create');
            }
            else{
                return redirect()->route('Pedidos.index');
            }

        }else if ( Auth::check() && Auth::user()->idRolFK== '2'){
            $consulta = DB::table('empleado')->where('idUsuarioFK', Auth::user()->idUsuario)->doesntExist();
            if($consulta){
                return redirect('empleados/create');
            }
            else{
                return redirect()->route('Pedidos.index');
            }
        }
        else{
            //usuario no autenticado
            return redirect()->route('login.form')->with('mensajeerror', "Usuario no reconocido");
            }
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


        $cliente = Cliente::where('idUsuarioFK' , '=' , Auth::user()->idUsuario)->get();
        return view('clientesdelavista.tables2')->with('clientes', $cliente)->with('detalles' , $producto)->with('detaller' , $nombreproduc);



    }
}


