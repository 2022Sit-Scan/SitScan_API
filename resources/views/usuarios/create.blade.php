@extends('layout')

@section('title', "CREAR USUARIO")

@section('content')

<h4 class="pt-3">CREAR USUARIO</h4>
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
        <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">
    </div>
    <div class="form-group">
        <label for="establecimiento_id">Establecimiento:</label>
        <select class="form-control" id="establecimiento_id" name="establecimiento_id">
            <option selected disabled value='Establecimiento'>Establecimiento</option>
            @foreach ($establecimientos as $establecimiento)
            <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
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

    <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="./imagenes/imagenes/icon_add.png" alt="Botón Añadir" height="12" width="15">AÑADIR</button>
    <a href="{{ route('usuarios.index') }}" class="btn btn-link"><img id="img_cerrarSesion" src="./imagenes/imagenes/icon_cerrarSesion.png" alt="Botón Cerrar Sesión" height="12" width="15">Regresar al listado de usuarios</a>
</form>
@endsection