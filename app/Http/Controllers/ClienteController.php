<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCliente;
use App\Usuario;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('clientes.tables')->with('clientes',Cliente::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=Usuario::all();
        return view ('clientes.create')->with("usuarios", $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        $usuarios=Usuario::find($cliente);
        return view ('clientes.show')->with('cliente' ,$cliente)->with('usuarios' ,$usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //mostrar el formulario de actualizar recurso
        return view ('clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //actualizar el cliente que llega atravez del comdel binding
        $cliente->nombreCliente= $request->input("nombre");
        $cliente->apellidoCliente = $request->input("apellido");
        $cliente->direccionCliente = $request->input("direccion");
        $cliente->telefonoCliente = $request->input("telefono");
        $cliente->estadoCliente = $request->input("estado");

        $cliente->save();
        return redirect("clientes")->with('mensaje_exito', "Cliente Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
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
}
