@extends('layouts.index')

@section('contenedor3')
<form method="POST" action="{{ url('empleados/'. $empleado->idEmpleado) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Editar Cliente {{ $empleado->nombreEmpleado }}</legend>

    <!-- Text input-->
    <div>
      <label for="textinput">Nombre Empleado</label>
      <div>
      <input value="{{ $empleado->nombreEmpleado }}" name="nombre" type="text" placeholder="" class="form-control input-md">
      {{ $errors->first("nombre") }}
      </div>
    </div>

    <!-- Text input-->
    <div>
      <label for="textinput">Teléfono Empleado</label>
      <div>
      <input value="{{ $empleado->telefonoEmpleado }}" name="telefono" type="text" placeholder="" class="form-control input-md">
      {{ $errors->first("telefono") }}
      </div>
    </div>

    <!-- Text input-->
    <div>
        <label for="selectbasic">Estado</label>
        <div>
          <select value="{{$empleado->estadoEmpleado}}" name="estado" class="form-control">
            <option value="1">Activo</option>
            <option value="2">En espera</option>
            <option value="3">Inactivo</option>
          </select>
          {{ $errors->first("estado") }}
        </div>
      </div>

    <!-- Text input-->
    <div>
        <label for="textinput">Usuario</label>
        <div>
        <input value="{{ $empleado->idUsuarioFK }}" name="usuario" type="text" placeholder="" class="form-control input-md">
        {{ $errors->first("usuario") }}
        </div>
      </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"> </label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Actualizar</button>
      </div>
    </div>

    </fieldset>
    </form>
@endsection
