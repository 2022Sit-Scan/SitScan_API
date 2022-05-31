@extends('layout')

@section('title', "Crear Producto")

@section('content')
    <div>
        <h4>Crear Producto</h4>
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
        
                <label for="name">Nombre Producto:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto">
                <br>
                <label for="urlImagen">urlImagen:</label>
                <input type="text" name="urlImagen" id="urlImagen" placeholder="/imagenes/<categoria>/<nombreimagen>">
                <br>
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
                <br>   
                  <div class="form-group">
                    <label for="categoria_id">Categoria</label>
                    <select class="form-control" id="categoria_id" name="categoria_id">
                        <option selected disabled value="categoria__id">Categoria</option>
                         @foreach ($categorias as $categoria)
                      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Crear Producto</button>
                  <a href="{{ route('productos.index') }}" class="btn btn-link">Regresar al listado de productos</a>
            </form>
        </div>
    </div>
@endsection