@extends('layout')

@section('contenido')
    <h1>Todos los mensajes</h1>
    <table class="table table-border">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes as $m)
                <tr>
                    <td> 
                        <a href="{{ route('mensaje.show',$m->id)}}">
                        {{ $m->nombre }}</a>
                    </td>
                    <td>{{ $m->correo }}</td>
                    <td>{{ $m->mensaje }}</td>
                    <td><a href="{{ route('mensaje.edit', $m->id ) }}" class="btn btn-success btn-sm">Editar</a>
                    <form action="{{ route('mensaje.destroy' , $m->id ) }}" method="post">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
              
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection