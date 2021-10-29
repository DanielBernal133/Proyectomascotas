@extends('layouts.index')

@section('contenedor2')
<form method="POST" action="{{ url('empleados') }}" class="form-horizontal">
    @csrf
    <fieldset>


    <!-- Form Name -->
    <legend>Nuevo empleado</legend>

    <!-- Text input-->
    <div>
      <label for="textinput">Nombre Empleado</label>
      <div>
      <input value="{{ old('nombre') }}" name="nombre" type="text" placeholder="" class="form-control input-md">
        {{ $errors->first("nombre") }}
      </div>
    </div>

    <!-- Text input-->
    <div >
      <label  for="textinput">Teléfono Empleado</label>
      <div >
      <input value="{{ old('telefono') }}" name="telefono" type="text" placeholder="" class="form-control input-md">
      {{ $errors->first("telefono") }}
      </div>
    </div>

    <div>
        <label for="textinput">Estado Empleado</label>
        <div>
        <select value="{{ old('estado') }}" name="estado"  placeholder="" class="form-control input-md">
            <option value="1">Habilitado</option>
            <option value="2">Deshabilitado</option>
        {{ $errors->first("estado") }}
    </select>
        </div>
      </div>

    <!-- Text input-->
    <div>
        <label for="textinput">Usuario</label>
        <div>
        <select value="{{ old('usuario') }}" name="usuario" placeholder="" class="form-control input-md">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->idUsuario }}">
                    {{ $usuario->correoUsuario }}</option>
            @endforeach
        {{ $errors->first("usuario") }}
    </select>
        </div>
      </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"> </label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Agregar</button>
      </div>
    </div>

    </fieldset>
    </form>
@endsection
