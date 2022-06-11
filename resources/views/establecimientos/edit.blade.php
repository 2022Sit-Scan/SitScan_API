@extends('layout')

@section('title', 'Editar usuario')

@section('content')
<h1>Editar usuario</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <h6>Por favor corrige los errores debajo:</h6>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ url("usuarios/{$usuario->id}") }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="{{ old('name', $usuario->name) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}
    </div>
    @enderror --}}
    </div>
    <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email', $usuario->email) }}">
    </div>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Mayor a 6 caracteres">
    </div>
    <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="../../imagenes/imagenes/icon_modificar.png" alt="Botón Modificar" height="12" width="15">MODIFICAR</button>
    <a href="{{ route('establecimientos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="../../imagenes/imagenes/flecha.png" alt="Botón Flecha" height="15" width="30">Regresar
        al listado de establecimientos</a>
</form>
@endsection