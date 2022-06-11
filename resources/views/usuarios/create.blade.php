@extends('layout')

@section('title', 'CREAR USUARIO')

@section('content')

<<<<<<< HEAD
    <h4 class="pt-3">CREAR USUARIO</h4>
=======
    <h1 class="pt-3">CREAR USUARIO</h1>
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

    <form method="POST" action="{{ url('usuarios') }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="roberto@example.com">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
<<<<<<< HEAD
            <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">
=======
            <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 carácteres">
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
        </div>
        <div class="form-group">
            <label for="establecimiento_id">Establecimiento:</label>
            <select class="form-control" id="establecimiento_id" name="establecimiento_id">
                <option selected disabled value='Establecimiento'>Establecimiento</option>
                @foreach ($establecimientos as $establecimiento)
                    <option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="rol">Rol:</label>
            <select class="form-control" id="rol" name="rol">
                <option value='ADMINISTRADOR'>Administrador</option>
                <option value='GERENTE'>Gerente</option>
                <option value='CAMARERO'>Camarero</option>
            </select>
        </div>

<<<<<<< HEAD
        <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="./imagenes/imagenes/icon_add.png"
                alt="Botón Añadir" height="12" width="15">AÑADIR</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-link"><img id="img_cerrarSesion"
                src="./imagenes/imagenes/icon_cerrarSesion.png" alt="Botón Cerrar Sesión" height="12" width="15">Regresar al
            listado de usuarios</a>
=======
        <button type="submit" class="btn btn-primary btn-add"><img id="img_cerrarSesion"
                src="{{ asset('/imagenes/imagenes/icon_add.svg') }} " alt="Botón Añadir" height="12"
                width="15">AÑADIR</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion"
                src="{{ asset('/imagenes/imagenes/flecha.png') }}" alt="Botón Flecha" height="15" width="30">Regresar
            al listado de usuarios</a>
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
    </form>
@endsection
