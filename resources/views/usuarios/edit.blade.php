@extends('layout')

@section('title', "Editar usuario")

@section('content')
    <h1>Editar usuario</h1>

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

        
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror--}}
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
        <a href="{{ url()->previous() }}">Regresar al listado de usuarios</a>--}}
    </p>
@endsection