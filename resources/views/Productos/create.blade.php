@extends('layouts.index')

@section('contenedor')
<h4 ><center>CREAR PRODUCTOS</center></h4>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<form  class="row g-3"action="{{    url('Productos') }}"method="POST" enctype="multipart/form-data">
    @csrf

  <div class="col-md-6">
    <label for="" class="form-label">Nombre</label>
    <input id="textinput" name="nombre" type="text" value="{{old('nombre')}}"class="form-control" tabindex="1">
    {{ $errors->first("nombre") }}
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Descripción Producto</label>
    <input id="textinput" name="descripcion" type="text"  class="form-control" tabindex="2">
    {{ $errors->first("descripcion") }}
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Cantidad</label>
    <input id="textinput" name="cantidad" type="number" class="form-control" tabindex="3">
    {{ $errors->first("cantidad") }}
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Precio Producto</label>
    <input id="textinput" name="precio" type="number"   class="form-control" tabindex="3">
    {{ $errors->first("precio") }}
  </div>

  <div style="margin:10px">
    <label for="selectbasic">Categoria Producto</label>
    <div>
      <select name="categoria" class="form-control">
        @foreach($categorias as $categoria)
        <option  value={{ $categoria->idCategoria }}>
            {{ $categoria->nombreCategoria }}    </option>
        @endforeach
      </select>
      {{ $errors->first("categoria") }}
    </div>
  </div>

<div style="margin:10px">
        <label for="selectbasic">Marca producto</label>
        <div>
          <select name="marca" class="form-control">
            @foreach($marcas as $marca)
                <option  value={{ $marca->idMarca }}>
                    {{ $marca->nombreMarca }}    </option>
            @endforeach
          </select>
          {{ $errors->first("marca") }}
        </div>
      </div>
<div class="col-12">
    <label for="" class="form-label">Imagen</label>
    <input type="file"name="imagenProducto"  id="imagen"   class="form-control" tabindex="3">
  </div>
<div style="margin: 20px;" class="col-6">
  <a href="/Productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</div>
</form>
@endsection


