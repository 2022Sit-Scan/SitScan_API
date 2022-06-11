@extends('layout')

@section('title', 'CREAR MESA')

@section('content')
    <div class="card">
        <h4 class="card-header">CREAR MESA</h4>
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
            <div class="form-group">
                <label for="establecimiento">Elige establecimiento</label>
                <select class="form-control" id="establecimiento" name="establecimiento">
                    @foreach ($establecimientos as $establecimiento)
                        <option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <form method="POST" action="{{ url('mesas') }}">
                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion"
                        src="./imagenes/imagenes/icon_add.png" alt="Botón Añadir" height="12" width="15">AÑADIR</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-link"><img id="img_cerrarSesion"
                        src="./imagenes/imagenes/icon_add.png" alt="Botón Flecha" height="12" width="15">Regresar al listado
                    de mesas</a>
            </form>
        </div>
    </div>
@endsection
