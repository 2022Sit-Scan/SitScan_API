@extends('layout')

@section('title', "Crear Categoria")

@section('content')
    <div>
        <h4>Crear comentario</h4>
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
        
                <label for="name">Nombre Producto:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre Categoria">
                <br>
                <label for="urlImagen">urlImagen:</label>
                <input type="text" name="urlImagen" id="urlImagen" placeholder="/imagenes/<categoria>/<nombreimagen>">
                <br>   
                <div class="form-group">
                    <label for="categoriaPadre">Categoria Padre</label>
                    <select class="form-control" id="categoriaPadre" name="categoriaPadre">
                        <option value=''>Es Categoria Padre</option>
                         @foreach ($categoriaspadre as $padre)
                      <option value="{{$padre->id}}">{{$padre->nombre}}</option>
                        @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Crear Categoria</button>
                  <a href="{{ route('categorias.index') }}" class="btn btn-link">Regresar al listado de Categorias</a>
            </form>
        </div>
    </div>
@endsection