@extends('layout')

@section('title', 'EDITAR CATEGORÍA')

@section('content')
<div>
    <h1 class="pt-3">EDITAR CATEGORÍA</h1>
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

        <form method="POST" action="{{ url("categorias/{$categoria->id}") }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nombre Producto:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $categoria->nombre) }}">
                {{-- otra forma de comprobar los errores 
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}
            </div>
            @enderror --}}
    </div>
    <div class="form-group">
        <label for="urlImagen">urlImagen:</label>
        <input type="text" class="form-control" name="urlImagen" id="urlImagen" value="{{ old('urlImagen', $categoria->urlImagen) }}">
    </div>
    <div class="form-group">
        <label for="categoriaPadre">Categoria Padre</label>
        <select class="form-control" id="categoriaPadre" name="categoriaPadre">
            <option value=''>Es Categoria Padre</option>
            @foreach ($categoriaspadre as $padre)
            <option value="{{ $padre->id }}">{{ $padre->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Actualizar Categoria</button>
    </form>
    <p>
        <a href="{{ route('categorias.index') }}">Regresar al listado de las categorias</a>

    </p>
</div>
</div>
@endsection