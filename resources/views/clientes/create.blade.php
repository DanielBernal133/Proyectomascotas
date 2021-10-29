@extends('layouts.plantillabase')
@section('contenido')
<center>
    <form class="form-horizontal" action="{{url('clientes')}}" method="POST">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <center><legend>Nuevo Cliente</legend></center>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Nombre:</label>
          <div class="col-md-4">
          <input value="{{old('nombre')}}" name="nombre" type="text" placeholder="" class="form-control input-md">
            {{$errors->first("nombre")}}
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Apellido:</label>
            <div class="col-md-4">
            <input value="{{old('apellido')}}" name="apellido" type="text" placeholder="" class="form-control input-md">
            {{$errors->first("apellido")}}
            </div>
          </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Dirección:</label>
          <div class="col-md-4">
          <input value="{{old('direccion')}}" name="direccion" type="text" placeholder="" class="form-control input-md">
          {{$errors->first("direccion")}}
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Teléfono:</label>
            <div class="col-md-4">
            <input value="{{old('telefono')}}" name="telefono" type="text" placeholder="" class="form-control input-md">
            {{$errors->first("telefono")}}
            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Estado</label>
            <div class="col-md-2">
              <select id="selectbasic" name="estado" class="form-control">
                <option value="1">Activo</option>
                <option value="2">En espera</option>
                <option value="3">Inactivo</option>
              </select>
            </div>
          </div>



          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Usuario al que pertenece:</label>
            <div class="col-md-2">
              <select id="selectbasic" name="usuario" class="form-control">
                  @foreach ($usuarios as $usuario)
                  <option value="{{$usuario->idUsuario}}">{{$usuario->correoUsuario}}</option>
                  @endforeach
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
    </center>
    @endsection
