@extends('layouts.index')

@section('contenedor')
<form method="POST" action="{{ url('empleados') }}" class="form-horizontal">
    @csrf
    <fieldset>


    <!-- Form Name -->
    <legend>Completar Registro</legend>

    <!-- Text input-->
    <div>
      <label for="textinput">Nombre Empleado</label>
      <div>
      <input value="{{ Auth::user()->name}}" name="nombre" type="text" placeholder="" class="form-control input-md" readonly="true">
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
    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"> </label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Completar registro</button>
      </div>
    </div>

    </fieldset>
    </form>
@endsection
