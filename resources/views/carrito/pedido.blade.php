<form method="POST" action="{{ url('Pedidos') }}">
@csrf
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"> </label>
                    <div class="col-md-4">
                      <button id="singlebutton" name="singlebutton" class="btn btn-primary">Hacer pedido</button>
                    </div>
                </div>
</form>
