@extends('layout')

@section('title', "Crear Alergeno")

@section('content')
    <div>
        <h4>Crear Alergeno</h4>
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

            <form method="POST" action="{{ url('alergenos') }}">
                
                {{ csrf_field() }}
        
                <label for="nombre">Nombre alergeno:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre Alergeno">
                <br>
                <label for="urlImagen">urlImagen:</label>
                <input type="text" name="urlImagen" id="urlImagen" placeholder="/imagenes/alergenos/<nombreimagen>">
                <br>
            
                  <button type="submit" class="btn btn-primary">Crear Alergeno</button>
                  <a href="{{ route('alergenos.index') }}" class="btn btn-link">Regresar al listado de alergenos</a>
            </form>
        </div>
    </div>
@endsection