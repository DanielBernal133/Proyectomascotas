<h1>Lista Pedidos</h1>

<table>
    <thead>
   <tr>

    <th>idProducto</th>
    <th>Nombre del Producto</th>
    <th>Descripcion Producto</th>
    <th>Cantidad Producto</th>
    <th>Precio Producto</th>
    <th>Imagen Producto </th>
    <th>Estado Producto </th>

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




         <td></td>
     </tr>



@endforeach

</tbody>


</table>
<a href="{{ url('Productos/create') }}">
    Nuevo producto
</a>
