@extends('layouts.index')

@section('contenedor')

<form method="POST" action="{{ url('Pedidos/' . $pedido->idPedido) }}" >
    @csrf
    @method('PUT')
    <div>
      <label for="textinput">Fecha Solicitud: {{ $pedido->fechaSolicitud }}</label>
    </div>

    <div>
        <label for="textinput">Fecha Envio</label>
        <div>
            <input value="{{ $pedido->fechaEnvio }}" name="fechaEnvio" type="Date" class="form-control">
    </div>
    <div>
        <label for="textinput">Fecha Entrega</label>
        <div>
            <input value="{{ $pedido->fechaEntrega }}" name="fechaEntrega" type="Date" class="form-control" >
        </div>
      </div>

    <!-- Text input-->
    <div>
        <label for="selectbasic">Estado de la entrega</label>
        <div>
          <select value="{{ $pedido->estadoPedido }}" name="estadoPedido" class="form-control">
            <option value="En Espera">En Espera</option>
            <option value="Concluido">Concluido</option>
            <option value="Rechazado">Rechazado</option>
          </select>
        </div>
      </div>
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"> </label>
      <div class="col-md-4">
        <a href="/Pedidos" class="btn btn-secondary">Cancelar</a>
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
    </form>
@endsection
