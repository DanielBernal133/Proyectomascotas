<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @if (session('mensaje'))
    <center><p>{{ session('mensaje') }}</p></center>
@endif


    <title>Wooftmate - OlvidasteContraseña</title>

    <!-- Custom fonts for this template-->

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
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
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                                        <p class="mb-4">Lo entendemos, pasan cosas. Sólo tienes que introducir tu dirección de correo electrónico a continuación
                                            ¡y le enviaremos un enlace para restablecer su contraseña!</p>
                                    </div>
                                    <form class="user" id="login-form" class="form" action="{{route('send.link')}}" method="POST">
    @csrf>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"for="username" 
                                                placeholder="Introduzca la dirección de correo electrónico...">
                                                <strong class="text-danger">{{ $errors->first('email')}}</strong>
                                        </div>
                                        <Center><button type="sumbit"class="btn btn-primary btn-user btn-block">

                            
                                            Restablecer la contraseña
                                            </button></Center>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                    <a class="small" href="{{url ('usuarios/create')}}">
                                            ¡Crea una cuenta!
                                        </a>
                                    </div>
                                    <div class="text-center">
                                    <a class="small" href="{{url ('login')}}">¿Ya tienes una cuenta? ¡Ingresa!</a>
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


    <!-- Core plugin JavaScript-->


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>


</html>
