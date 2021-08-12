<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Categoria;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Productos.index ')->with( 'Productos', Producto::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categorias=Categoria::all();

        return view('productos.create')->with("categorias" , $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $maxproducto=Producto::all()->max('idProdcuto');

        $nuevoproductos = new Producto();

        $nuevoproductos->nombreProducto=$request->input("nombre");
        $nuevoproductos->descripcionProducto=$request->input("descripcion");
        $nuevoproductos->cantidadProducto=$request->input("cantidad");
        $nuevoproductos->precioProducto=$request->input("precio");
        $nuevoproductos->imagenProducto=$request->input("imagen");
        $nuevoproductos->estadoProducto=1;
        $nuevoproductos->idCategoriaFK=$request->input("categoria");
        $nuevoproductos->idMarcaFK=1;
        $nuevoproductos->save();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
