@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <h1 class="text-center mb-4">Registrar usuario</h1>
      <form>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Correo electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese el correo electrónico">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Teléfono</label>
          <input type="text" class="form-control" id="telefono" placeholder="Ingrese el numero telefónico">
        </div>
        <br>
        <div class="form-group">
          <label for="contrasena">Rol</label>
          <input type="text" class="form-control" id="rol" placeholder="Ingrese el rol">
        </div>
        <br>
        <div class="form-group">
          <label for="contrasena">Contraseña</label>
          <input type="password" class="form-control" id="rol" placeholder="Ingrese la contraseña">
        </div>
        <br>
        <div>
          <a href="/">
        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection