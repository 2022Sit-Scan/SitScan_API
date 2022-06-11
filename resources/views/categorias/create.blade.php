@extends('layout')

@section('title', 'CREAR CATEGORÍA')

@section('content')
<div>
    <h1 class="pt-3">CREAR CATEGORÍA</h1>
    <div>

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

        <form method="POST" action="{{ url('categorias') }}">

            {{ csrf_field() }}

            <div class="form-group">
            <label for="name">Nombre de la categoría:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la categoría">
            </div>
            <div class="form-group">
            <label for="urlImagen">urlImagen:</label>
            <input type="text" class="form-control" name="urlImagen" id="urlImagen" placeholder="/imagenes/<categoria>/<nombreimagen>">
            </div>
            <div class="form-group">
                <label for="categoriaPadre">Categoría Padre</label>
                <select class="form-control" id="categoriaPadre" name="categoriaPadre">
                    <option value=''>Es Categoria Padre</option>
                    @foreach ($categoriaspadre as $padre)
                    <option value="{{ $padre->id }}">{{ $padre->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-add"><img id="img_cerrarSesion" src="../../imagenes/imagenes/icon_add.svg " alt="Botón Añadir" height="12" width="15">AÑADIR</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="../../imagenes/imagenes/flecha.png" alt="Botón Flecha" height="15" width="30">Regresar
                al listado de cartas</a>
        </form>
    </div>
</div>
@endsection