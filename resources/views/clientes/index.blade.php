@extends('layouts.plantillabase')
@section('contenido')
<center><h1>Lista de clientes</h1></center>
@if (session('mensaje_exito'))
    <div>{{session('mensaje_exito')}}</div>
@endif
<center><a href="{{url ('clientes/create')}}" class="btn btn-primary">Nuevo Cliente</a></center>
<br>
<table class="table table-hover table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Detalles</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente -> nombreCliente}}
                </td>
                <td>
                    {{$cliente -> apellidoCliente}}
                </td>
                <td>
                    {{$cliente -> direccionCliente}}
                </td>
                <td>
                    {{$cliente -> telefonoCliente}}
                </td>
                <td>
                     @if ($cliente -> estadoCliente == 1)
                         Activo
                     @elseif ($cliente -> estadoCliente == 2)
                         En espera
                      @else
                      Inactivo
                     @endif

                </td>
                <td>
                    <a href="{{url('clientes/'.$cliente->idCliente)}}" class="btn btn-info" class="bi bi-eye"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg> Ver detalles</a>
                </td>

                <td>
                    <form action="{{url('/clientes/'. $cliente->idCliente)}}" method="POST" id="formulario-eliminar">
                    <a href="{{url('clientes/'.$cliente->idCliente. "/edit")}}" class="btn btn-outline-warning" class="bi bi-pencil-square"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg> Actualizar</a>

                      @csrf
                      {{method_field('DELETE')}}
                   <button onclick="return confirm('¿Quieres Borrar?')" class="btn btn-danger" class="bi bi-trash-fill" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                  </svg> Borrar</button>
                </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

<script>
    const form=document.getElementById('formulario-eliminar');
    form.addEventListener('submit', e=>{
    e.preventDefault();
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
      Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
    });
</script>
@endsection

