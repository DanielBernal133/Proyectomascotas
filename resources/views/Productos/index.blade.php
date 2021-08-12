
@extends('layouts.plantillabase');


@section('contenido')

<a href="{{ url('Productos/create') }}" class="btn btn-primary">
    Nuevo producto
</a>


<table class=" table table-sm">
    <thead>
   <tr>

    <th>idProducto</th>
    <th>Nombre </th>
    <th>Descripcion </th>
    <th>Cantidad </th>
    <th>Precio </th>
    <th>Imagen  </th>
    <th>Estado  </th>


    <th></th>



   </tr>


    </thead>

<tbody>

@foreach ($Productos as  $Producto)


     <tr>
         <td>{{$Producto->idProducto}}</td>
         <td>{{$Producto->nombreProducto}}</td>
         <td>{{$Producto->descripcionProducto}}</td>
         <td>{{$Producto->cantidadProducto}}</td>
         <td>{{$Producto->precioProducto}}</td>
         <td>{{$Producto->imagenProducto}}</td>
         <td>{{$Producto->estadoProducto}}</td>





         <td>
             <a class="btn btn-info "> Editar</a>
             <button class="btn btn-secondary ">Borrar</button>
         </td>
     </tr>



@endforeach

</tbody>


</table>



@endsection





