@extends('layout')

<<<<<<< HEAD
@section('title', "Crear Producto")

@section('content')
    <div>
        <h4>Crear Producto</h4>
=======
@section('title', 'CREAR PRODUCTO')

@section('content')
    <div>
        <h1 class="pt-3">CREAR PRODUCTO</h1>
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
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
<<<<<<< HEAD
                
                {{ csrf_field() }}
        
                <label for="nombre">Nombre Producto:</label>
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
                  <a href="{{ route('pedidos.index') }}" class="btn btn-link">Regresar al listado de productos</a>
            </form>
        </div>
    </div>
@endsection
=======

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
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
