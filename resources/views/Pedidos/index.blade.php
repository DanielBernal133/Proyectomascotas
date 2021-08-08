<h1>Lista Pedidos</h1>

<table>
    <thead>
   <tr>

    <th>Fecha Solicitud</th>
    <th>Fecha Envio</th>
    <th>Fecha Entrega</th>
    <th>Estado Pedido</th>

    <th></th>



   </tr>


    </thead>

<tbody>

@foreach ($Pedidos as  $Pedido)


     <tr>
         <td>{{$Pedido->fechaSolicitud}}</td>
         <td>{{$Pedido->fechaEnvio}}</td>
         <td>{{$Pedido->fechaEntrega}}</td>
         <td>{{$Pedido->estadoPedido}}</td>


         <td></td>
     </tr>



@endforeach

</tbody>


</table>
