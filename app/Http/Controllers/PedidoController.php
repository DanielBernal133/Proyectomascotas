<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\pedidoDeProducto;
use Illuminate\Http\Request;
use App\Cliente;
use App\Empleado;
use Illuminate\Support\Facades\Validator;


class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pedidos.tables')
        ->with( 'Pedidos', Pedido::paginate(10));


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
        //return view('Pedidos.create');
        $empleado=Empleado::All();
        $cliente=Cliente::all();
        $pedido=Pedido::all();

        return view('Pedidos.create')->with("Pedidos", $pedido)->with("empleados" , $empleado)->with("clientes" , $cliente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $maxproducto=pedido::all()->max('idPedido');


        $nuevopedidos = new pedido();
        $nuevopedidos->fechaSolicitud=$request->input("fechasolicitud");
        $nuevopedidos->fechaEnvio=$request->input("fechaEnvío");
        $nuevopedidos->fechaEntrega=$request->input("fechaEntrega");
        $nuevopedidos->idClienteFK=$request->input("cliente");
        $nuevopedidos->idEmpleadoFK=$request->input("empleado");
        $nuevopedidos->estadoPedido = 1;

        if($nuevopedidos->fechaSolicitud> $nuevopedidos->fechaEnvio&&$nuevopedidos->fechaEntrega){
            return redirect('Pedidos')->with('mensaje_exito' , "La fecha de solicitud es mas grande a la de entrega y Envio");
        }else{
            $nuevopedidos->save();
            return redirect('Pedidos')->with('mensaje_exito' , "Pedido Exitoso");
        }



        //return redirect('/Pedidos');
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
        $editpedido = Pedido::find($pedido);
        return view('Pedidos.edit')->with('pedido',$editpedido);
         //var_dump($editpedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, /*Pedido*/ $pedido)
    {
        $pedido = Pedido::find($pedido);
        $pedido->fechaSolicitud = $request->input("fechaSolicitud");
        $pedido->fechaEnvio = $request->input("fechaEnvio");
        $pedido->fechaEntrega = $request->input("fechaEntrega");
        $pedido->estadoPedido = $request->input("estadoPedido");
        $pedido->idClienteFK=$request->input("cliente");
        $pedido->idEmpleadoFK=$request->input("empleado");
        $pedido->save();

        return redirect('Pedidos')->with('mensaje_exito' , "Pedido actualizado correctamente");


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
        switch($pedido->estadoPedido){
            case null:
                $pedido->estadoPedido= 1;
                $pedido->save();
                $mensaje_exito = "Pedido Activado";
                break;
            case 1:
                $pedido->estadoPedido = 2;
                $pedido->save();
                $mensaje_exito = "Pedido Desactivado";
                break;
            case 2:
                $pedido->estadoPedido= 1;
                $pedido->save();
                $mensaje_exito = "Pedido Activado";
                break;
        }
        return redirect('Pedidos')->with('mensaje_exito' , $mensaje_exito);
    }


}
