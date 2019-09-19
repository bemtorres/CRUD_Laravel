@extends('layout')

@section('contenido')
<h1>Editar mensaje {{ $m->nombre }}</h1>
<form class="col-md-12" action="{{ route('mensaje.update' , $m->id) }}" method="post">
        {!! method_field('PUT') !!}
        <input type="hidden" class="hidden" name="_token" value="{{ csrf_token() }}">
        {{-- {!! csrf_field() !!} --}}
        <label for="nombre" > 
            Nombre
        <input type="text" name="nombre" id="" value="{{ $m->nombre }}">
            {!! $errors->first('nombre','<span class=text-danger>:message</span>') !!}
        </label><br>
        <label for="nombre" > 
            telefono
        <input type="number" name="telefono" id="" value="{{ $m->telefono }}">
        {!! $errors->first('telefono','<span class=text-danger>:message</span>') !!}
    </label><br>
    <label for="email" > Email <input type="text" name="email" value="{{ $m->correo }}" id="">
            {{ $errors->first('email') }}
        </label> <br>
        <label for="mensaje" > Mensaje <textarea name="mensaje" id="" cols="30" rows="10">{{ $m->mensaje }}</textarea> <label> <br>
            <button type="submit">Enviar</button>
    </form>
@endsection
