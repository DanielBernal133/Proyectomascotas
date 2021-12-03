<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Cliente;

class TelefonoController extends Controller
{
    public function guardarDatos(Request $request){
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
        return redirect('/')->with('mensaje_exito', "Cliente exitoso");
    }
}
