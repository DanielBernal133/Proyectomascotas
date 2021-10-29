@extends('layouts.plantillabase')
@section('contenido')
<center>
    <form class="form-horizontal" action="{{url('datoscliente')}}" method="POST">
        @csrf
        <fieldset>
        <center><legend>Ingrese sus datos</legend></center>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Dirección:</label>
          <div class="col-md-4">
          <input value="{{old('direccion')}}" name="direccion" type="text" placeholder="" class="form-control input-md">
          {{$errors->first("direccion")}}
          </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Teléfono:</label>
            <div class="col-md-4">
            <input value="{{old('telefono')}}" name="telefono" type="text" placeholder="" class="form-control input-md">
            {{$errors->first("telefono")}}
            </div>
          </div>

          <!-- Select Basic -->

          <!-- Text input-->

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"> </label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </fieldset>
        </form>
    </center>
    @endsection
