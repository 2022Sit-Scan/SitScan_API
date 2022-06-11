@extends('layout')

@section('title', 'Editar Producto')

@section('content')
<<<<<<< HEAD
    <h1>Editar Producto</h1>
=======
    <h1 class="pt-3">EDITAR PRODUCTO</h1>
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")

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
<<<<<<< HEAD

    <form method="POST" action="{{ url("productos/{$producto->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">Nombre Producto:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $producto->nombre) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        <br>
        <label for="urlImagen">urlImagen:</label>
        <input type="text" name="urlImagen" id="urlImagen" value="{{ old('urlImagen', $producto->urlImagen) }}">
        <br>
=======

    <form method="POST" action="{{ url("productos/{$producto->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nombre Producto:</label>
            <input type="text" name="nombre" class="form-control" id="nombre"
                value="{{ old('nombre', $producto->nombre) }}">
        </div>
        <div class="form-group">
            <label for="urlImagen">urlImagen:</label>
            <input type="text" name="urlImagen" class="form-control" id="urlImagen"
                value="{{ old('urlImagen', $producto->urlImagen) }}">
        </div>
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>
        <br>
        <div class="form-group">
<<<<<<< HEAD
            <label for="categoria_id">Categoria</label>
=======
            <label for="categoria_id">Categoria:</label>
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
            <select class="form-control" id="categoria_id" name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
<<<<<<< HEAD
        <button type="submit">Actualizar producto</button>
    </form>

    <p>
        <a href="{{ route('productos.index') }}">Regresar al listado de productos</a>
        {{-- otra forma 
        <a href="{{ url()->previous() }}">Regresar al listado de productos</a> --}}
    </p>
=======
        <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion"
                src="{{ asset('/imagenes/imagenes/icon_modificar.png') }}" alt="Botón Modificar" height="12"
                width="15">MODIFICAR</button>
        <a href="{{ route('productos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion"
                src="{{ asset('/imagenes/imagenes/flecha.png') }}" alt="Botón Flecha" height="15" width="30">Regresar
            al listado de productos</a>
    </form>
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
@endsection
