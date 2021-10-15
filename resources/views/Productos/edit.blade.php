
@extends('layouts.plantillabase');
@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/Productos/{{$producto->idProducto}}" method="POST" class="guardar" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre Producto</label>
    <input id="codigo" name="nombre" type="text" class="form-control" value="{{$producto->nombreProducto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcionProducto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$producto->cantidadProducto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$producto->precioProducto}}">
  </div>



</tr>





  <div class="mb-3">
    <label for="imagenProducto" class="form-label">Imagen</label>
    {{$producto->imagenProducto}}

    <input type="file"name="imagenProducto"  id="imagenProducto"   class="form-control" tabindex="3">
    <img src="{{asset('storage').'/'.$producto->imagenProducto}}" width="100" att="">
  </div>





  <a href="/Productos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary" >Guardar</button>

</form>

@endsection






@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

$(.'guardar').submit(function(e){
  e.preventDefault();

Swal.fire({
  title: 'Quieres Guardar los cambios?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: `Guardar `,
  denyButtonText: `No guardar `,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
      }



   })
});

    </script>

@endsection
