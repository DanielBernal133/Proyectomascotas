@extends('layouts.index')

@section('contenedor')
     <table class="table table-primary">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Carrito</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>
                                {{ $producto->nombreProducto }}
                            </td>
                            <td>
                                {{ $producto->descripcionProducto }}
                            </td>
                            <td>
                                {{ $producto->precioProducto }}
                            </td>
                            <td>
                                <a href="{{ url('add-to-cart/'.$producto->idProducto) }}" class="btn btn-warning btn-block text-center">
                                    Añadir al carrito
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection
