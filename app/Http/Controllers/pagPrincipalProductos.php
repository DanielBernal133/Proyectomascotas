<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Session;
use App\Usuario;

class pagPrincipalProductos extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('pagina.index')->with("productos", $productos);
    }


    
}
