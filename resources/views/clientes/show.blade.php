@extends('layouts.plantillabase')
@section('contenido')
<center><h1>Detalles de cliente: {{$cliente -> nombreCliente}} {{$cliente -> apellidoCliente}}</h1></center>
<ul>
    <li>Telefono: {{$cliente -> telefonoCliente}}</li>
    <li>Estado: @if ($cliente -> estadoCliente == 1)
        Activo
    @elseif ($cliente -> estadoCliente == 2)
        En espera
     @else
     Inactivo
    @endif</li>
    @foreach ($usuarios as $usuario)
    <li>Usuario: {{$usuario -> correoUsuario}}</li>
    @endforeach
</ul>
@endsection
