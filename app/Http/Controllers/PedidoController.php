<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pedidos.index ')->with( 'Pedidos', Pedido::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion: procesar datos de un input
        //1. establecer las reglas de validacion:

         $reglas_validacion=[
             "fechaSolicitud"=>'',
             "fechaEnvio",
             "fechaEntrega",
             "estadoPedido",
        ];

        //2. Crear el objeto de validacion:
        $validador = Validator::make($request->all(), $reglas_validacion);

        //3. Validar
        if($validador->fails()){
            //validacion fallida
            return redirect('pedido/create')->withErrors($validador);
        }

        //seleccionar el id maximo que haya en los pedidos
        $maxpedido=Pedido::all()->max('Pedidoid');

        //crear el nuevo recurso pedidos
        $nuevopedido = new Pedido();
        $nuevopedido->fechaSolicitud = $request->input("fechasolicitud");
        $nuevopedido->fechaEnvio = $request->input("fechaenvio");
        $nuevopedido->fechaEntrega = $request->input("fechaentrega");
        $nuevopedido->estadoPedido = $request->input("estado");
        $nuevopedido->save();

        //redireccionar a la ruta deseada
        //radireccionar solo sirve en rutas GET
        //redirect puede enviar a la ruta destino lo que se denomina como datos flash
        return redirect("pedidos")->with('mensaje_exito', "Pedido exitoso");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */

    public function edit(Pedido $pedido)
    {
        $editpedido = Pedido::find($pedido);


        //mostar el formulario de actualizar recurso: pedido
        return view('pedido.edit')->with('pedido' , $editpedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
