<form method="POST" action="{{ url('usuarios2/' . $usuario->idUsuario) }}">
    @method('PUT')
    @csrf
        <div class="col-md-6">
        <select name="rol" class="form-select" aria-label="Default select example">>
          <option  value="1">Administrador</option>
          <option  value="2">Gerente</option>
          <option  value="3">Secretario</option>
          <option  value="4">Cliente</option>
        </select>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"> </label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
</form>
