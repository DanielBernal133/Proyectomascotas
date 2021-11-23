<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\pedidoDeProducto;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('pagina.shop', compact('productos'));
    }
    public function cart (){
        return view('carrito.cart');
        // echo '<pre>';
        // var_dump(session('cart'));
        // echo '</pre>';
        // Session::flush();
    }

    public function addTocart($idProducto){
        $producto = Producto::find($idProducto);
        $cart = session()->get('cart');
        if($cart==null) {
            $cart = [
                    $idProducto => [
                        "cantidad" => 1,
                        "nombre"=>$producto->nombreProducto,
                        "precio" => $producto->precioProducto,
                        "IdCliente" => Auth::user()->idUsuario
                    ]
            ];
            session()->put('cart', $cart);
            // echo "Carrito creado exitosamente";
            return redirect('carrito')->with('mensaje_exito', 'El producto se añadio correctamente al carrito');
        }else if(isset(session('cart')[$idProducto])){
            $cart[$idProducto]['cantidad']++;
            session()->put('cart', $cart);
            return redirect('carrito')->with('mensaje_exito', "Cantidad agregada del producto exitosamente");
        }else {
            $cart[$idProducto] = [
                "nombre"=>$producto->nombreProducto,
                "cantidad" => 1,
                "precio" => $producto->precioProducto,
                "IdCliente" => Auth::user()->idUsuario
            ];
            session()->put('cart', $cart);
            return redirect('carrito')->with('mensaje_exito', "Producto añadido al carrito");
            // echo "Producto añadido al carrito";
        }
    }
    public function remove(Request $request)
    {
        if($request->idProducto) {
            $cart = session()->get('cart');
            if(isset($cart[$request->idProducto])) {
                unset($cart[$request->idProducto]);
                session()->put('cart', $cart);
            }
            echo "Producto removido";
        }
    }
}
