@extends('layout')

@section('title', "CREAR ALÉRGENO")

@section('content')

<h1 class="pt-3">CREAR ALÉRGENO</h1>
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

<form method="POST" action="{{ url('alergenos') }}">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="nombre">Nombre del alérgeno:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alérgeno">
    </div>

    <div class="form-group">
        <label for="urlImagen">urlImagen:</label>
        <input type="text" class="form-control" name="urlImagen" id="urlImagen" placeholder="/imagenes/alergenos/<nombreimagen>">
    </div>

    <button type="submit" class="btn btn-primary btn-add"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/icon_add.svg')}}" alt="Botón Añadir" height="12" width="15">AÑADIR</button>
    <a href="{{ route('alergenos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/flecha.png')}}" alt="Botón Flecha" height="15" width="30">Regresar al listado de alérgenos</a>
</form>
@endsection