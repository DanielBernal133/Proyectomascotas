
<h3 class="login-heading mb-4">Recuperar Contraseña paso 3</h3>
<form action="{{route ('reset.password')}}" method="POST">
    @csrf
<div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email: {{$errors->first("email")}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Password: {{$errors->first("password")}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" name="password_confirmation" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Confirmar password: {{$errors->first("password_confirmation")}}</label></label>
    <input type="hidden" value="{{$token}}" name="token">
  </div>
  <div class="d-grid">
    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">ACTUALIZAR</button>
    <div class="text-center">
    </div>
  </div>
</form>

