@extends('layout')

@section('title', 'CREAR ESTABLECIMIENTO')

@section('content')
    <div class="card">
        <h4 class="card-header">CREAR ESTABLECIMIENTO</h4>
        <div class="card-body">

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
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre del usuario"
                        value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com"
                        value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Mayor a 6 caracteres">
                </div>

                <button type="submit" class="btn btn-primary btn-add"><img id="img_cerrarSesion" src="../../imagenes/imagenes/icon_add.svg " alt="Botón Añadir" height="12" width="15">AÑADIR</button>
            <a href="{{ route('establecimientos.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="../../imagenes/imagenes/flecha.png" alt="Botón Flecha" height="15" width="30">Regresar
                al listado de establecimientos</a>
            </form>
        </div>
    </div>
@endsection
