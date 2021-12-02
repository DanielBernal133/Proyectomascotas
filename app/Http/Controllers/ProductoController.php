<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Categoria;
use App\Marca;
use App\Http\Requests\StoreProducto;

use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Productos.tables')->with( 'Productos', Producto::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categorias=Categoria::all();

        $marcas=Marca::all();

        return view('productos.create')->with("categorias" , $categorias)->with('marcas' , $marcas);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducto $request)
    {

        $maxproducto=Producto::all()->max('idProdcuto');

        $nuevoproductos = new Producto();



        $nuevoproductos->nombreProducto=$request->input("nombre");
        $nuevoproductos->descripcionProducto=$request->input("descripcion");
        $nuevoproductos->cantidadProducto=$request->input("cantidad");
        $nuevoproductos->precioProducto=$request->input("precio");
        $nuevoproductos->estadoProducto=1;
        $nuevoproductos->idCategoriaFK=$request->input("categoria");
        $nuevoproductos->idMarcaFK=$request->input("marca");
        $nuevoproductos->imagenProducto=$request->get("imagen");


//script para subir imagen

   if($request->hasFile('imagenProducto')){
       $nuevoproductos['imagenProducto']=$request->file('imagenProducto')->store('uploads' ,'public');

    }



    $nuevoproductos->save();
    return redirect('Productos');

   if($request->hasFile('imagenProducto')){
       $nuevoproductos['imagenProducto']=$request->file('imagenProducto')->store('uploads' ,'public');

    }
    $nuevoproductos->save();
    return redirect('Productos')->with('mensaje_exito' , "Producto agregado correctamente");
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
    public function edit( /*Producto*/ $producto)

    {
        $producto = Producto::find($producto);

        return view('Productos.edit')->with('producto' , $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,/* Producto*/ $producto)
    {




         $producto = Producto::find($producto);
        $producto->nombreProducto = $request->input('nombre');
        $producto->descripcionProducto = $request->input('descripcion');
        $producto->cantidadProducto = $request->input('cantidad');
        $producto->precioProducto = $request->input('precio');




        if($request->hasFile('imagenProducto')){


            Storage::delete('public/'.$producto->imagenProducto);

            $producto->imagenProducto=$request->file('imagenProducto')->store('uploads' ,'public');

         }


        $producto->save();


        return redirect('/Productos');
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
    public function habilitar($idProducto){
        $Producto = Producto::find($idProducto);
        switch($Producto->estadoProducto){
            case null:
                $Producto->estadoProducto=1;
                $Producto->save();
                $mensaje_exito = 'Estado Habilitado';
                break;
            case 1:
                $Producto->estadoProducto=2;
                $Producto->save();
                $mensaje_exito = 'Estado Deshabilitado';

                break;

            case 2:
                $Producto->estadoProducto=1;
                $Producto->save();
                $mensaje_exito = 'Estado Activado';
                break;




        }
        return redirect('Productos')->with('mensaje_exito', $mensaje_exito);
    }


}


