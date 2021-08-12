@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Pedidos/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th >ID</th>
      <th >Fecha Solicitud</th>
      <th >Fecha Envío</th>
      <th >Fecha Entrega</th>
      <th >Estado Pedido</th>
      <th >Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pedido as $pedido)
    <tr>
        <td>{{$pedido->idPedido}}</td>
        <td>{{$pedido->fechaSolicitud}}</td>
        <td>{{$pedido->fechaEnvio}}</td>
        <td>{{$pedido->fechaEntrega}}</td>
        <td>{{$pedido->EstadoPedido}}</td>
        <td>
         <form action="{{ route('Pedidos.destroy',$pedido->idPedido) }}" method="POST">
            <a href="/Pedidos/{{$pedido->idPedido }}/edit" class="btn btn-info">Editar</a>
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
