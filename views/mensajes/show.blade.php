@extends('layout')

@section('contenido')
    <h1>mensaje</h1>
<p>Enviado por {{ $m->nombre }}</p>
<p>Enviado por {{ $m->correo }}</p>
<p>Mensaje {{ $m->mensaje }}</p>
@endsection