<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\pedidoDeProducto;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class pedidoDeProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('carrito.pedido');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pedidonuevo = new pedidoDeProducto();
        // $pedidonuevo->cantidadProducto= $request->input("cantidad");
        // $pedidonuevo->precioProducto= $request->input("precio");
        // $pedidonuevo->idProductoFK= $request->input("IdProducto");
        // $pedidonuevo->idPedidoFK= 10;
        // $pedidonuevo->save();
        // echo "guardado";
        // $cart = session()->get('cart');
        // Session::flush($cart);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedidoDeProducto  $pedidoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function show(pedidoDeProducto $pedidoDeProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedidoDeProducto  $pedidoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(pedidoDeProducto $pedidoDeProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedidoDeProducto  $pedidoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedidoDeProducto $pedidoDeProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedidoDeProducto  $pedidoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedidoDeProducto $pedidoDeProducto)
    {
        //
    }
}
