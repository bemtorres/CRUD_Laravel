@extends('layout')

@section('contenido')

    <div class="row">
        <div class="col-md-12">

                <h2>Contactos nuevos</h2>

        </div>

    </div>
    
    <div class="w-100"></div>

    <div class="row">
        
        @if(session()->has('info'))
            <h1>{{ session('info') }}</h1>
        @else

            <form class="col-md-12" action="{{ route('mensaje.store') }}" method="post">
                <input type="hidden" class="hidden" name="_token" value="{{ csrf_token() }}">
                {{-- {!! csrf_field() !!} --}}
                <label for="nombre" > 
                    Nombre
                <input type="text" name="nombre" id="" value="{{ old('nombre') }}">
                    {!! $errors->first('nombre','<span class=text-danger>:message</span>') !!}
                </label><br>
                <label for="nombre" > 
                    telefono
                <input type="number" name="telefono" id="" value="{{ old('telefono') }}">
                {!! $errors->first('telefono','<span class=text-danger>:message</span>') !!}
            </label><br>
            <label for="email" > Email <input type="text" name="email" value="{{ old('email') }}" id="">
                    {{ $errors->first('email') }}
                </label> <br>
                <label for="mensaje" > Mensaje <textarea name="mensaje" id="" cols="30" rows="10">{{ old('mesanje') }}</textarea> <label> <br>
                    <button type="submit">Enviar</button>
            </form>
        
        @endif
    </div>

 
@stop