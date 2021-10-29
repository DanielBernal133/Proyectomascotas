@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<center><a href="Pedidos/create" class="btn btn-primary">CREAR PEDIDO</a>
    <a href="{{url ('pdf')}}" class="btn btn-info">PDF</a></center>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th >ID</th>
      <th >Fecha Solicitud</th>
      <th >Fecha Envío</th>
      <th >Fecha Entrega</th>
      <th >Estado Pedido</th>
      <th>Actualizar</th>
      <th ></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($Pedidos as $pedido)
    <tr>
        <td>{{$pedido->idPedido}}</td>
        <td>{{$pedido->fechaSolicitud}}</td>
        <td>{{$pedido->fechaEnvio}}</td>
        <td>{{$pedido->fechaEntrega}}</td>
        <td>{{$pedido->estadoPedido}}</td>
        <td>{{$pedido->idClienteFK}}</td>
        <th>{{$pedido->idEmpleadoFK}}</th>


        <td>
         <form action="{{ route('Pedidos.destroy',$pedido->idPedido) }}" method="POST">
            <a href="{{url ('Pedidos/' . $pedido->idPedido . "/edit") }}" class="btn btn-info">Editar</a>
              @method()
              @csrf
         </form>
        </td>
        <td>
            @switch($pedido->estadoPedido)
                @case( null )
                <a href="{{ url ('Pedidos/' . $pedido->idPedido . "/estadopedido" ) }}">
                    Asignar estado
                </a>
                @break
                @case( 1 )
                     <strong class="text success"> Pedido Habilitado </strong>
                     <a href="{{ url ('Pedidos/' . $pedido->idPedido . "/estadopedido" ) }}">
                    Deshabilitar
                </a>
                @break
                @case( 2 )
                    <strong class="text success"> Pedido Deshabilitado </strong>
                    <a href="{{ url ('Pedidos/' . $pedido->idPedido . "/estadopedido" ) }}">
                    Habilitar
                </a>
                @break

            @endswitch
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
