@extends('layouts.index')

@section('contenedor2')

<form method="POST" action="{{ url('Pedidos/' . $pedido->idPedido) }}" >
    @method('PUT')
    @csrf
    <fieldset>
    <legend>EDITAR REGISTROS</legend>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Solicitud</label>
    <input value="{{ $pedido->fechaSolicitud }}" name="fechaSolicitud" type="Date" class="form-control" value="{{$pedido->fechaSolicitud}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Envío</label>
    <input value="{{ $pedido->fechaEnvio }}" name="fechaEnvio" type="Date" class="form-control" value="{{$pedido->fechaEnvio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Entrega</label>
    <input value="{{ $pedido->fechaEntrega }}" name="fechaEntrega" type="Date" class="form-control" value="{{$pedido->fechaEntrega}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado Pedido</label>
    <input value="{{ $pedido->estadoPedido }}" name="estadoPedido" type="Text" class="form-control" value="{{$pedido->EstadoPedido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">IdClienteFK</label>
    <input id="textinpu" name="cliente" type="Text"  class="form-control" tabindex="3">
  <div class="mb-3">
    <label for="" class="form-label">IdEmpleadoFK</label>
    <input id="textinpu" name="empleado" type="Text"  class="form-control" tabindex="3">
  </div>
  <a href="/Pedidos" class="btn btn-secondary">Cancelar</a>
  <button  id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
</form>
</fieldset>

@endsection
