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
        //return view('Pedidos.index ')->with( 'Pedidos', Pedido::paginate(10));

        //return 'Vista index()';
        $pedidos = Pedido::all();
        return view('Pedidos.index')->with('pedido',$pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {


        $nuevopedidos = new Pedido();
        $nuevopedidos->fechaSolicitud = $request->get('fechaSolicitud');
        $nuevopedidos->fechaEnvio = $request->get('fechaEnvío');
        $nuevopedidos->fechaEntrega = $request->get('fechaEntrega');
        $nuevopedidos->estadoPedido = $request->get('estadoPedido');
        $nuevopedidos->save();

        return redirect('/Pedidos');
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
        //$editpedido = Pedido::find($pedido);
         return view('Pedidos.edit')->with('pedido',$pedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update( $request, Pedido $pedido)
    {
        $pedido = Pedido::find($pedido);
        $pedido->fechaSolicitud = $request->get('fechaSolicitud');
        $pedido->fechaEnvío = $request->get('fechaEnvío');
        $pedido->fechaEntrega = $request->get('fechaEntrega');
        $pedido->estadoPedido = $request->get('estadoPedido');
        $pedido->save();

        return redirect('/Pedidos');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido = Pedido::find($pedido);
        $pedido->delete();

        return redirect('/Pedidos');
    }
}
