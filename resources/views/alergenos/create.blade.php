@extends('layout')

@section('title', 'CREAR ALÉRGENO')

@section('content')

    <h4 class="pt-3">CREAR ALÉRGENO</h4>
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
            <label for="nombre">Nombre alérgeno:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Alérgeno">
        </div>

        <div class="form-group">
            <label for="urlImagen">urlImagen:</label>
            <input type="text" class="form-control" name="urlImagen" id="urlImagen"
                placeholder="/imagenes/alergenos/<nombreimagen>">
        </div>

        <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="./imagenes/imagenes/icon_add.png"
                alt="Botón Añadir" height="12" width="15">AÑADIR</button>
        <a href="{{ route('alergenos.index') }}" class="btn btn-link"><img id="img_cerrarSesion"
                src="./imagenes/imagenes/icon_add.png" alt="Botón Flecha" height="12" width="15">Regresar al listado de
            alérgenos</a>
    </form>
@endsection
