<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Cliente;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRegistroDatos;
 
class RegistrarDatosController extends Controller
{


    public function index()
    {

        return view('clientesdelavista.tables2')->with('clientes',Usuario::paginate(10));
        
    }
//



//
    public function create()
    {
        $usuarios=Usuario::all();
        return view ('clientes.create')->with("usuarios", $usuarios);
    }
//

    public function store(Request $request )
  
    {

        


        //Registrar los otrros datos del cliente
       
        $nuevocliente = new Cliente();
        $nuevocliente->nombreCliente = Auth::user()->name;
        $nuevocliente->apellidoCliente = Auth::user()->apellido;
        $nuevocliente->direccionCliente = $request->input("direccion");
       $nuevocliente->telefonoCliente = $request->input("telefono");
       $nuevocliente->estadoCliente = 1;
       $nuevocliente->idUsuarioFK = Auth::user()->idUsuario;
        $nuevocliente->save();

//redireccionar a la ruta deseada
//radireccionar solo sirve en rutas GET
//redirect puede enviar a la ruta destino lo que se denomina como datos flash
return redirect("clientesregistro")->with('mensaje_exito', "Cliente exitoso");

}
  
//


public function update(StoreRegistroDatos $request, $cliente)
{
    $cliente = Cliente::find($cliente);
    //actualizar el cliente que llega atravez del comdel binding
   
    $cliente->direccionCliente = $request->input("direccion");
    $cliente->telefonoCliente = $request->input("telefono");
  
    $cliente->save();

    return redirect('perfil')->with('mensaje_exito', "Cliente Actualizado");
}

}
