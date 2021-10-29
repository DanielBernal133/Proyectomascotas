
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
    <th>Estado  </th>
    <th>Imagen  </th>


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
         <td>
            @switch($Producto->estadoProducto)
                @case(null)
                <a class="btn btn-primary" href="{{ url('Productos/'. $Producto->idProducto . "/habilitar") }}">
                    Asignar estado
                </a>
                @break
                @case(1)
                <strong class="text-success">Estado hablilitado</strong>
                <a class="btn btn-primary" href="{{ url('Productos/'. $Producto->idProducto . "/habilitar") }}">
                    Deshabilitar
                </a>
                @break
                @case(2)
                <strong class="text-danger">Estado deshabilitado</strong>
                <a class="btn btn-primary" href="{{ url('Productos/'. $Producto->idProducto . "/habilitar") }}">
                    Habilitar
                </a>
                @break
            @endswitch
        </td>


          <td>
          <img src="{{asset('storage').'/'.$Producto->imagenProducto}}" width="100" att="">


        <!--Php artisan storage:link}} -->






         <td>
            <a href="/Productos/{{$Producto->idProducto }}/edit" class="btn btn-info">Editar</a>

         </td>
     </tr>



@endforeach

</tbody>


</table>
{{ $Productos->links() }}



@endsection





