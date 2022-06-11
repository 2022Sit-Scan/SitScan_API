@extends('layout')

@section('title', 'Editar usuario')

@section('content')
<<<<<<< HEAD
    <h1>Editar usuario</h1>
=======
    <h1 class="pt-3">EDITAR USUARIO</h1>
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

    <form method="POST" action="{{ url("usuarios/{$usuario->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

<<<<<<< HEAD

        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Mayor a 6 caracteres">
        <br>
        <label for="rol">Rol</label>
        <select class="form-control" id="rol" name="rol">
            <option value='GERENTE'>Gerente</option>
            <option value='CAMARERO'>Camarero</option>
        </select>
        <button type="submit">Actualizar usuario</button>
    </form>

    <p>
        <a href="{{ route('usuarios.index') }}">Regresar al listado de usuarios</a>
        {{-- otra forma 
        <a href="{{ url()->previous() }}">Regresar al listado de usuarios</a> --}}
    </p>
=======
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $usuario->email) }}">
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">
        </div>
        <div class="form-group">
            <label for="rol">Rol:</label>
            <select class="form-control" id="rol" name="rol">
                <option value='GERENTE'>Gerente</option>
                <option value='CAMARERO'>Camarero</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion"
                src="{{ asset('/imagenes/imagenes/icon_modificar.png') }}" alt="Botón Modificar" height="12"
                width="15">MODIFICAR</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion"
                src="{{ asset('/imagenes/imagenes/flecha.png') }}" alt="Botón Flecha" height="15" width="30">Regresar
            al listado de usuarios</a>
    </form>
>>>>>>> parent of 65e51d1 (Revert "limpiar codigo y rutas")
@endsection
