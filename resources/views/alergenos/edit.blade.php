@extends('layout')

@section('title', 'Editar Alergeno')

@section('content')
    <h1>Editar Alergeno</h1>

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

    <form method="POST" action="{{ url("alergenos/{$alergeno->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Gluten" value="{{ old('nombre', $alergeno->nombre) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        <br>
        <label for="urlImagen">urlImagen:</label>
        <input type="text" name="urlImagen" id="urlImagen" value="{{ old('urlImagen', $alergeno->urlImagen) }}">

        <button type="submit">Actualizar Alergeno</button>
    </form>

    <p>
        <a href="{{ route('alergenos.index') }}">Regresar al listado de alergenos</a>
        {{-- otra forma 
        <a href="{{ url()->previous() }}">Regresar al listado de usuarios</a> --}}
    </p>
@endsection
