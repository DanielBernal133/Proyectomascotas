<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TiendaMascotas - IniciarSesión</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="../../css/sb-admin-2.css "rel="stylesheet">

</head>

<body style="background-image: url('img/Fondo.jpg');">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img  class="imagenLogin" src="assets/images/logo/logo.png" alt="">
                                        <h1 class="h4 text-gray-900 mb-4">Inicia Sesión</h1>
                                    </div>
                                    <form class="user"method="POST" action="{{ url('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Correo Usuario</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Introduzca su correo electrónico..."name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña"name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordarme
                                                </label>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn btn-user btn-block">
                                    Ingresar
                             </button>
                             <a  href ="{{ url ( '/' )}}" class="btn btn btn-user btn-block"> Volver</a>
                                    
                             
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="{{url ('usuarios/create')}}">¡Crear una Cuenta!</a>


                                        <div class="text-center">
                                        <a class="small" href="{{ url ('confirmar-correo')}}">Restablecer Contraseña</a>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> --}}
    @if ( session("mensaje_exito"))
        <script>
            swal("Exito!", "{{ session('mensaje_exito') }}", "success");
        </script>
    {{-- <div>{{ session("mensaje_exito") }} </div> --}}
    @endif

    @if (session('mensaje'))
    <script>
      swal("Exito!", "{{ session('mensaje') }}", "success");
    </script>
    @endif

    @if (session('mensajeerror'))
    <script>
      swal("Oops..", "{{ session('mensajeerror') }}", "error");
    </script>
    @endif
</body>

</html>
