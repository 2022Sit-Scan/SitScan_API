@extends('layout')

@section('title', 'CREAR PRODUCTO')

@section('content')
    <div>
        <h1 class="pt-3">CREAR PRODUCTO</h1>
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

            <form method="POST" action="{{ url('productos') }}">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nombre">Nombre Producto:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Producto">
                </div>

                <div class="form-group">
                    <label for="urlImagen">urlImagen:</label>
                    <input type="text" class="form-control" name="urlImagen" id="urlImagen"
                        placeholder="/imagenes/<categoria>/<nombreimagen>">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
                </div>
                <div class="form-group">
                    <label for="categoria_id">Categoria:</label>
                    <select class="form-control" id="categoria_id" name="categoria_id">
                        <option selected disabled value="categoria__id">Categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-add"><img id="img_cerrarSesion"
                        src="{{ asset('/imagenes/imagenes/icon_add.svg') }} " alt="Botón Añadir" height="12"
                        width="15">AÑADIR</button>
                <a href="{{ route('productos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion"
                        src="{{ asset('/imagenes/imagenes/flecha.png') }}" alt="Botón Flecha" height="15"
                        width="30">Regresar
                    al listado de productos</a>
            </form>
            <br>
        </div>
    </div>
@endsection
