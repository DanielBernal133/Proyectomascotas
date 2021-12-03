<?php

namespace App\Http\Controllers;

use App\FechasModel;
use App\Mail\FechasCliente;
use App\Pedido;
use App\pedidoDeProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombreClientes = DB::table('pedido')
                                    ->join('cliente', 'pedido.idClienteFK', '=', 'cliente.idUsuarioFK')
                                    ->select('pedido.*', 'cliente.*', 'pedido.idPedido')
                                    ->get();
        return view('Pedidos.tables')->with('nombreclientes', $nombreClientes);


        //return 'Vista index()';
        //$pedidos = Pedido::all();
        //return view('Pedidos.index')->with('pedido',$pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('carrito.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        // echo "<pre>";
        // var_dump(session('cart'));
        // echo "</pre>";
        //var_dump($nuevopedidos->idClienteFK);
        $nuevopedidos = new Pedido();
        $nuevopedidos->idClienteFK= Auth::user()->idUsuario;
        $nuevopedidos->estadoPedido = "En Espera";
        $nuevopedidos->fechaSolicitud = Carbon::now();
        $nuevopedidos->save();
        //Poner otros atrivutos del pedido
        foreach(session('cart') as $detalle){
            $pedidoproducto = new pedidoDeProducto();
            $pedidoproducto->idProductoFK = $detalle["IdProducto"];
            $pedidoproducto->idPedidoFK = $nuevopedidos->idPedido;
            $pedidoproducto->cantidadProducto = $detalle["cantidad"];
            $pedidoproducto->precioProducto = $detalle["precio"];
            $pedidoproducto->save();

        }
        //Session::put('cart' , session('cart')[1]);
        session()->forget('cart');
        return redirect()->route('cart.view')->with('mensaje_exito' , "Su producto se registro correctamente, espere entre 24H/48H para que su pedido sea validado");
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

    public function edit(/*Pedido*/ $pedido)
    {
        $pedido = Pedido::find($pedido);
        return view('Pedidos.edit')->with('pedido', $pedido);
         //var_dump($editpedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, /*Pedido*/ $pedidos)
    {

         $pedido = Pedido::find($pedidos);
         $pedido->fechaEnvio = $request->input("fechaEnvio");
         $pedido->fechaEntrega = $request->input("fechaEntrega");
            //$pedido->estadoPedido = $request->input("estadoPedido");
         $pedido->idEmpleadoFK= Auth::user()->idUsuario;
         $consulta = DB::table('fechaarreglo')
                        ->select('fechaarreglo.*')
                        ->whereDate('fecha_de_arreglo' , Carbon::now())
                        ->where('idEmpleadoFK', Auth::user()->idUsuario)
                        ->count();
        $correo = DB::table('pedido')
                        ->join('cliente', 'pedido.idClienteFK', '=', 'cliente.idUsuarioFK')
                        ->join('usuario', 'cliente.idUsuarioFK', '=', 'usuario.idUsuario')
                        ->select('usuario.email')
                        ->where('pedido.idPedido', $pedido->idPedido)
                        ->get();
        if($pedido->fechaEnvio >  $pedido->fechaEntrega){
             return redirect('Pedidos')->with('mensajeerror' , "La fecha de envio pasa la fecha de entrega ¡Revisar!");
         }
         else if($consulta > '30'){
            return redirect('Pedidos')->with('mensaje_exito' , "Ya no puedes validar mas fechas por hoy :D");
         }
         else {
            $pedido->save();
            Mail::to($correo)->send(new FechasCliente());
            DB::table('fechaarreglo')->insert([
                ['fecha_de_arreglo' => Carbon::now(), 'idEmpleadoFK' => Auth::user()->idUsuario]
            ]);
            return redirect('Pedidos')->with('mensaje_exito' , "Fechas validadas correctamente");
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido){}

    public function estadopedido($idPedido){

        $pedido = Pedido::find($idPedido);
                $pedido->estadoPedido = 'Cancelado';
                $pedido->save();
                $mensaje_exito = "Su cancelación fue registrada";
                return redirect('perfil')->with('mensaje_exito' , $mensaje_exito);
    }


}
