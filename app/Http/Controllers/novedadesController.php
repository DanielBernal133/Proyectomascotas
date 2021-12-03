<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class novedadesController extends Controller
{
    public function novedades(){

        $nombreClientes = DB::table('pedido')
                                    ->join('cliente', 'pedido.idClienteFK', '=', 'cliente.idUsuarioFK')
                                    ->select('pedido.*', 'cliente.*', 'pedido.idPedido')
                                    ->where('estadoPedido' , 'Cancelado')
                                    ->get();

        return view('Pedidos.novedades')->with('novedades' , $nombreClientes);
    }
}
