@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR PRODCUTOS</h2>

<form action="/Productos" method="POST">
    @csrf

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="textinput" name="nombre" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción Producto</label>
    <input id="textinput" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="textinput" name="cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio Producto</label>
    <input id="textinput" name="precio" type="number"   class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="textinput" name="iamgen" type="number"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado Producto</label>
    <input id="textinput" name="producto" type="number"   class="form-control" tabindex="3">
  </div>


  <select name="categoria">
    @foreach($categorias as $categoria)
    <option value={{ $categoria->idCategoria }}>
        {{ $categoria->nombreCategoria }}    </option>
    @endforeach
  </select>
  <a href="/Productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection


