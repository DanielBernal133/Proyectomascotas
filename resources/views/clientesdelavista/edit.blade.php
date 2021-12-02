@extends('layouts.plantillabase')
@section('contenido')
<center>
<form class="form-horizontal" action="{{url('clientesvista/'. $clientesvista->idUsuario)}}" method="POST">
        @method('PUT')
        @csrf
        <fieldset>

        <!-- Form Name -->
        <center><legend>Editar Cliente {{$cliente->nombreCliente}} {{$cliente->apellidoCliente}}</legend></center>
        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Configuraciones de tu perfil</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="first-name" class="required mb-1">Nombre</label>
                                                            <input value="{{$cliente->nombreCliente}}" name="nombre" type="text" placeholder="" class="form-control input-md">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="last-name" class="required mb-1">Apellido</label>
                                                                <input value="{{$cliente->apellidoCliente}}" name="apellido" type="text" placeholder="" class="form-control input-md">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-1">Nombre de Usuario</label>
                                                        <input type="text" id="display-name" placeholder="Nombre de Usuario" />
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Correo electrónico</label>
                                                        <input type="email" id="email" placeholder="Correo electrónico" />
                                                    </div>
                                                    <fieldset>
                                                        <legend>Contraseña</legend>
                                                        <div class="single-input-item mb-3">
                                                            <label for="current-pwd" class="required mb-1">Contraseña actual</label>
                                                            <input type="password" id="current-pwd" placeholder="Contraseña actual" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="new-pwd" class="required mb-1">Nueva contraseña</label>
                                                                    <input type="password" id="new-pwd" placeholder="Nueva contraseña" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="confirm-pwd" class="required mb-1">Confirmar contraseña</label>
                                                                    <input type="password" id="confirm-pwd" placeholder="Confirmar contraseña" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item single-item-button">
                                                        <button class="btn flosun-button secondary-btn theme-color  rounded-0">Guardar cambios</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
       
    </center>
@endsection


