@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR PEDIDOS</h2>

<form action="/Pedidos" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Fecha Solicitud</label>
    <input id="textinput" name="fecha solicitud" type="Date" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Envío</label>
    <input id="textinput" name="fecha envio" type="Date" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Entrega</label>
    <input id="textinput" name="fecha entrega" type="Date" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado Pedido</label>
    <input id="textinpu" name="estado pedido" type="Text"  class="form-control" tabindex="3">
  </div>
  <a href="/Pedidos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
