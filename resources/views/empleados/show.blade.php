@extends('layouts.index')


@section('contenedor4')
<h1>Detalle de cliente: {{$empleado->nombreEmpleado}}
</h1>
<ul>
<li>Telefono de empleado: {{$empleado->telefonoEmpleado}}</li>
<li>Estado Empleado: {{$empleado->estadoEmpleado}}</li>
</ul>
@endsection
