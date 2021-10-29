<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCliente;
use App\Usuario;
use Illuminate\Support\Facades\Auth;

class DatosClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=Usuario::all();
        return view ('datoscliente.create')->with("usuarios", $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevocliente = new Cliente();
        $nuevocliente->nombreCliente = Auth::user()->name;
        $nuevocliente->apellidoCliente = Auth::user()->apellido;
        $nuevocliente->direccionCliente = $request->input("direccion");
        $nuevocliente->telefonoCliente = $request->input("telefono");
        $nuevocliente->estadoCliente = Auth::user()->estadoUsuario;
        $nuevocliente->idUsuarioFK = Auth::user()->idUsuario;
        $nuevocliente->save();

        //redireccionar a la ruta deseada
        //radireccionar solo sirve en rutas GET
        //redirect puede enviar a la ruta destino lo que se denomina como datos flash
        echo "Datos Guardados";
        //return redirect("clientes")->with('mensaje_exito', "Cliente exitoso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
