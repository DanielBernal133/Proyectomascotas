@extends('layouts.index')

@section('contenedor')


<form method="POST" action="{{ url('Pedidos') }}" class="form-horizont">
    @csrf
    <fieldset>
    <legend>CREAR PEDIDOS</legend>
  <div>
    <label for="" class="form-label">Fecha Solicitud</label>
    <input id="textinput" name="fechasolicitud" type="Date" class="form-control" tabindex="1">
  </div>
  <div >
    <label for="" class="form-label">Fecha Envío</label>
    <input id="textinput" name="fechaEnvío" type="Date" class="form-control" tabindex="2">
  </div>
  <div>
    <label for="" class="form-label">Fecha Entrega</label>
    <input id="textinput" name="fechaEntrega" type="Date" class="form-control" tabindex="3">
  </div>
  <div>
    <label for="" class="form-label">Cliente</label>
    <select id="textinpu" name="cliente"  class="form-control" tabindex="3">
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->idCliente }}">
                {{ $cliente->nombreCliente }}</option>
        @endforeach
    </select>
  </div>
  <div>
    <label for="" class="form-label">Empleado</label>
    <select id="textinpu" name="empleado" type="Text"  class="form-control" tabindex="3">
        @foreach ($empleados as $empleado)
            <option value="{{ $empleado->idEmpleado }}">{{ $empleado->nombreEmpleado }}</option>
        @endforeach
    </select>
  </div>


  <a href="/Pedidos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</fieldset>
</form>

@endsection
