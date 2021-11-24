<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Woofmate - Registrarse</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.css "rel="stylesheet">

</head>

<body style="background-image: url('../img/Fondo.jpg');">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img class="imagenLogin" src="../assets/images/logo/logo.png" alt="">
                                <h1 class="h4 text-gray-900 mb-4">Recuperar Contraseña</h1>
                            </div>
                            <form method="POST" action="{{route('reset.password')}}"class="form-horizontal">

@csrf
                                
                                <div class="form-group">
                                    <input type="email" for="email"class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Dirección de Correo Electrónico" name="email"type="email">
                                        <strong class="text-danger">{{ $errors->first('email')}}</strong>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" for="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Contraseña" name="password" type="password">
                                            <strong class="text-danger">{{ $errors->first('password')}}</strong>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" for="password1"class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repita la Contraseña" name="password_confirmation">
                                            <strong class="text-danger">{{ $errors->first('password')}}</strong>
                                            <input name="token"  type="hidden" value="{{ $token }}" >

                                    </div>
                                  
                                </div>
                                <center>
                                <br>
                          <input type="submit" value="Resetear" class="btn btn btn-user btn-block"/>
                          </br></center>
                            
                            </form>
                           
                           
                            <div class="text-center">
                            <a class="small" href="{{url ('login')}}">¿Ya tienes una cuenta? ¡Ingresa!</a>
                            </div>
                            <div class="text-center">
                            <a class="small" href="{{ url ('confirmar-correo')}}">Restablecer Contraseña</a>
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

</body>

</html>
