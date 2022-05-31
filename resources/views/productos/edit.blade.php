@extends('layout')

@section('title', "Editar Producto")

@section('content')
    <h1>Editar Producto</h1>

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

        <label for="name">Nombre Producto:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $producto->nombre) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror--}}
        <br>
        <label for="urlImagen">urlImagen:</label>
        <input type="text" name="urlImagen" id="urlImagen" value="{{ old('urlImagen', $producto->urlImagen) }}">
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>
        <br>   
          <div class="form-group">
            <label for="categoria_id">Categoria</label>
            <select class="form-control" id="categoria_id" name="categoria_id">
                <option selected disabled value={{ old('categoria', $producto->categoria_id) }}>{{ old('categoria', $producto->categoria->nombre) }}</option>
                 @foreach ($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
            </select>
          </div>
        <button type="submit">Actualizar producto</button>
    </form>

    <p>
        <a href="{{ route('productos.index') }}">Regresar al listado de productos</a>
        {{-- otra forma 
        <a href="{{ url()->previous() }}">Regresar al listado de productos</a>--}}
    </p>
@endsection