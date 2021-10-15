<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\pedidoDeProducto;
use Illuminate\Support\Facades\Session;

class CarritoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('pagina.shop', compact('productos'));
    }
    public function cart (){
        return view('carrito.cart');
        /*echo '<pre>';
        var_dump(session('cart'));
        echo '</pre>';
        Session::flush();*/
    }

    public function addTocart($idProducto){
        $producto = Producto::find($idProducto);
        $cart = session()->get('cart');

        if($cart==null) {
            $cart = [
                    $idProducto => [
                        "nombre"=>$producto->nombreProducto,
                        "cantidad" => 1,
                        "precio" => $producto->precioProducto
                    ]
            ];
            session()->put('cart', $cart);
            echo "Carrito creado exitosamente";
            //return redirect()->back()->with('success', 'El producto se añadio correctamente al carrito');
        }else if(isset(session('cart')[$idProducto])){
            $cart[$idProducto]['cantidad']++;
            echo "Cantidad Cambiada del producto $idProducto";
            session()->put('cart', $cart);
        }else {
            $cart[$idProducto] = [
                "nombre"=>$producto->nombreProducto,
                "cantidad" => 1,
                "precio" => $producto->precioProducto,

            ];
            session()->put('cart', $cart);
            echo "Producto añadido al carrito";
        }



    }
}
