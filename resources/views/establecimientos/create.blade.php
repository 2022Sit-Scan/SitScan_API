@extends('layout')

@section('title', 'CREAR ESTABLECIMIENTO')

@section('content')
<h1 class="pt-3">CREAR ESTABLECIMIENTO</h1>

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

<form method="POST" action="{{ url('establecimientos') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del establecimientos" value="{{ old('nombre') }}">
    </div>
    <div class="form-group">
        <label for="text">Url Logo:</label>
        <input type="text" class="form-control" name="urlLogo" id="urlLogo" placeholder="/imagenes/logos/elviris.png" value="{{ old('urlLogo') }}">
    </div>
    <button type="submit" class="btn btn-primary btn-add"><img id="img_cerrarSesion" src="../../imagenes/imagenes/icon_add.svg " alt="Botón Añadir" height="12" width="15">AÑADIR</button>
    <a href="{{ route('establecimientos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="../../imagenes/imagenes/flecha.png" alt="Botón Flecha" height="15" width="30">Regresar
        al listado de establecimientos</a>
</form>
</div>
@endsection