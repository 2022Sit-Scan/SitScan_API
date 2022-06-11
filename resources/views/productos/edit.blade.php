@extends('layout')

@section('title', 'EDITAR PRODUCTO')

@section('content')
<h1 class="pt-3">EDITAR PRODUCTO</h1>

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

<form method="POST" action="{{ url("productos/{$producto->id}") }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre Producto:</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre', $producto->nombre) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}
    </div>
    @enderror --}}
    </div>
    <div class="form-group">
        <label for="urlImagen">urlImagen:</label>
        <input type="text" name="urlImagen" class="form-control" id="urlImagen" value="{{ old('urlImagen', $producto->urlImagen) }}">
    </div>
    <label for="descripcion">Descripción:</label>
    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>
    <br>
    <div class="form-group">
        <label for="categoria_id">Categoria:</label>
        <select class="form-control" id="categoria_id" name="categoria_id">
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/icon_modificar.png')}}" alt="Botón Modificar" height="12" width="15">MODIFICAR</button>
    <a href="{{ route('productos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/flecha.png')}}" alt="Botón Flecha" height="15" width="30">Regresar
        al listado de productos</a>
</form>
@endsection