@extends('layout')

@section('contenido')

<form action="{{ route('saludos') }}" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre de usuario">
    <small id="emailHelp" class="form-text text-muted">Nombre Usuario</small>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Contraseña</label>
    <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="*********">
  </div> 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@stop