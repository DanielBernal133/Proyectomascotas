
<h3 class="login-heading mb-4">Recuperar Contraseña paso 1</h3>
<span><div>{{session('mensaje')}}</div></span>
<form action="{{route ('send.link')}}" method="POST">
    @csrf
<div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email: {{$errors->first("email")}}</label>
  </div>
  <div class="d-grid">
    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Confirmar</button>
    <a href="/login">Volver</a>
    <div class="text-center">
    </div>
  </div>
</form>

