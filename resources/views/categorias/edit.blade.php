@extends('layout')

@section('title', "Editar Categoria")

@section('content')
    <div >
        <h4 >Editar Categoria</h4>
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
        
                <label for="name">Nombre Producto:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $categoria->nombre) }}">
                {{-- otra forma de comprobar los errores 
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror--}}
                <br>
                <label for="urlImagen">urlImagen:</label>
                <input type="text" name="urlImagen" id="urlImagen" value="{{ old('urlImagen', $categoria->urlImagen) }}">
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
                <button type="submit">Actualizar Categoria</button>
            </form>
            <p>
                <a href="{{ route('categorias.index') }}">Regresar al listado de las categorias</a>
               
            </p>
        </div>
    </div>
@endsection