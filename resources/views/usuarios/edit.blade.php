@extends('layouts.index')

@section('contenedor')
<form method="POST" action="{{ url('rolusuario/' . $rolusuario->idUsuario) }}">
    @method('PUT')
    @csrf
        <div class="col-md-6">
            <div>
                <label for="selectbasic">Nuevo Rol</label>
                <div>
                  <select value="{{ $rolusuario->idRolFK }}" name="rol" class="form-control">
                    <option  value="1">Administrador</option>
                    <option  value="2">Gerente</option>
                    <option  value="3">Secretario</option>
                    <option  value="4">Cliente</option>
                  </select>
                </div>
              </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"> </label>
            <div class="col-md-4">
                <a href="/rolusuario" class="btn btn-secondary">Cancelar</a>
              <button id="singlebutton" name="singlebutton" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
</form>
@endsection
