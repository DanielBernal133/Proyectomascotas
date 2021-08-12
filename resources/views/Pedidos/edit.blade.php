


@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>


<form class="form-horizontal" action="{{url('Pedidos/'. $pedido->idPedido)}}" method="POST">
    @method('PUT')
    @csrf



  <div class="mb-3">
    <label for="" class="form-label">Fecha Solicitud</label>
    <input id="textinput" name="fecha solicitud" type="Date" class="form-control" value="{{$pedido->fechaSolicitud}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Envío</label>
    <input id="textinput" name="fecha envio" type="Date" class="form-control" value="{{$pedido->fechaEnvio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Entrega</label>
    <input id="textinput" name="fecha entrega" type="Date" class="form-control" value="{{$pedido->fechaEntrega}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado Pedido</label>
    <input id="textinput" name="estado pedido" type="Text" class="form-control" value="{{$pedido->EstadoPedido}}">
  </div>
  <a href="/Pedidos" class="btn btn-secondary">Cancelar</a>
  <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
</form>

@endsection
