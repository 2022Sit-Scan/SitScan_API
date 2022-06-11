@extends('layout')

@section('title', "EDITAR ALÉRGENO")

@section('content')
<h1 class="pt-3">EDITAR ALÉRGENO</h1>

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

<form method="POST" action="{{ url("alergenos/{$alergeno->id}") }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $alergeno->nombre) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}
    </div>
    </div>
    @enderror--}}

    <br>
    <div class="form-group">
        <label for="urlImagen">UrlImagen:</label>
        <input type="text" name="urlImagen" class="form-control" id="urlImagen" value="{{ old('urlImagen', $alergeno->urlImagen) }}">
    </div>

    <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/icon_modificar.png')}}" alt="Botón Modificar" height="12" width="15">MODIFICAR</button>
    <a href="{{ route('alergenos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/flecha.png')}}" alt="Botón Flecha" height="15" width="30">Regresar al listado de alérgenos</a>

</form>

@endsection