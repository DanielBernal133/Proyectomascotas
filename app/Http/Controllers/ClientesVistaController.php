<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Http\Requests\ClientesVista;
use App\Usuario;
use Illuminate\Support\Facades\Hash;
use App\Cliente;
use App\Http\Requests\StoreCliente;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use Illuminate\Support\Facades\DB;

class ClientesVistaController extends Controller
{

    public function show(Cliente $cliente)
    {
        $usuarios=Usuario::find($cliente);
        return view ('clientes.show')->with('cliente' ,$cliente)->with('usuarios' ,$usuarios);
    }
//



//
    public function edit(Usuario $clientesvista)
    {
        //mostrar el formulario de actualizar recurso
        $cliente = Cliente::where('idUsuarioFK' , '=' , Auth::user()->idUsuario)->get();
        return view ('clientesdelavista.tables2')->with('clientes', $cliente);
    }
//


//
    public function update(Request $request, $cliente)
    {
        $cliente = Usuario::find($cliente);
        //actualizar el cliente que llega atravez del comdel binding
        $cliente->email = $request->input("email");
        $cliente->apellido = $request->input("apellido");
        $cliente->name = $request->input("name");
        $cliente->save();

        return redirect('perfil')->with('mensaje_exito', "Cliente Actualizado");
    }
//



//
    public function destroy($idCliente)
    {
        cliente::destroy($idCliente);

        return redirect('clientes')->with('mensaje_exito', "Cliente eliminado");
    }

    public function habilitar($idCliente){
        $cliente = Cliente::find($idCliente);
        switch($cliente->estadoCliente){
            case null:
                $cliente->estadoCliente=1;
                $cliente->save();
                $mensaje_exito = 'Cliente Habilitado';
                break;
            case 1:
                $cliente->estadoCliente=2;
                if($cliente->idPedido !== NULL){
                    $mensaje_exito = "No se puede Deshabilitar un cliente con pedidos en proceso";
                }else{
                    $cliente->save();
                    $mensaje_exito = 'Cliente Deshabilitado';
                }
                break;

            case 2:
                $cliente->estadoCliente=1;
                $cliente->save();
                $mensaje_exito = 'Cliente Activado';
                break;
        }
        return redirect('clientes')->with('mensaje_exito', $mensaje_exito);
    }


//LA PARTE DEL LOGIN
public function actulizarcontraseña( ClientesVista $request, $usu ){


    $usu = Usuario::find($usu);

    //actualizar el cliente que llega atravez del comdel binding

    $usu->password= Hash::make( $request->password);
    $usu->save();

    $logout = new LoginController();
    return  $logout->logout();




    }

}


