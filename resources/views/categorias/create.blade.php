@extends('layout')

@section('title', "CREAR CATEGORÍA")

@section('content')
    <div>
        <h4>CREAR CATEGORÍA</h4>
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
        
                <label for="name">Nombre de la categoría:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre de la categoría">
                <br>
                <label for="urlImagen">urlImagen:</label>
                <input type="text" name="urlImagen" id="urlImagen" placeholder="/imagenes/<categoria>/<nombreimagen>">
                <br>   
                <div class="form-group">
                    <label for="categoriaPadre">Categoría Padre</label>
                    <select class="form-control" id="categoriaPadre" name="categoriaPadre">
                        <option value=''>Es Categoria Padre</option>
                         @foreach ($categoriaspadre as $padre)
                      <option value="{{$padre->id}}">{{$padre->nombre}}</option>
                        @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="./imagenes/imagenes/icon_add.png" alt="Botón Añadir" height="12" width="15">AÑADIR</button>
                  <a href="{{ route('categorias.index') }}" class="btn btn-link"><img id="img_cerrarSesion" src="./imagenes/imagenes/icon_add.png" alt="Botón Flecha" height="12" width="15">Regresar al listado de Categorias</a>
            </form>
        </div>
    </div>
@endsection