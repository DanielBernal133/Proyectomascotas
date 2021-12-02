<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Http\Requests\ClientesVista;
use App\Usuario;
use Illuminate\Support\Facades\Hash;
class ClientesVistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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



//
    public function store(StoreCliente $request)
    {
        //Validacion: procesar datos de un input
        //1. establecer las reglas de validacion:
        /*$reglas_validacion=[
            "nombre"=>'required|alpha|max:10',
            "apellido"=>'required|alpha|max:20',
            "direccion"=>'required|max:40',
            "estado",
            "usuario"
        ];

        //2. Crear el objeto de validacion:
        $validador= Validator::make($request->all(), $reglas_validacion);

        //3. Validar
        if($validador->fails()){
            //validacion fallida
            return redirect('clientes/create')->withErrors($validador);
        }*/


        //crear el nuevo recurso cliente
        $nuevocliente = new Cliente();
        $nuevocliente->nombreCliente = $request->input("nombre");
        $nuevocliente->apellidoCliente = $request->input("apellido");
        $nuevocliente->direccionCliente = $request->input("direccion");
        $nuevocliente->telefonoCliente = $request->input("telefono");
        $nuevocliente->estadoCliente = $request->input("estado");
        $nuevocliente->idUsuarioFK = $request->input("usuario");
        $nuevocliente->save();

        //redireccionar a la ruta deseada
        //radireccionar solo sirve en rutas GET
        //redirect puede enviar a la ruta destino lo que se denomina como datos flash
        return redirect("clientes")->with('mensaje_exito', "Cliente exitoso");
    }
//



//
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
        //return view ('clientesdelavista.tables2')->with('clientesvista', $clientesvista);
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


