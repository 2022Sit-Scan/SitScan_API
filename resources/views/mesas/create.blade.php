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
            
            <form method="POST" action="{{ url('mesas') }}">
                {{ csrf_field() }}
            <div class="form-group">
                <label for="establecimiento_id">Establecimiento</label>
                <select class="form-control" id="establecimiento_id" name="establecimiento_id">
                    <option selected disabled>Elige Establecimiento</option>
                    @foreach ($establecimientos as $establecimiento)
                        <option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
                    @endforeach
                </select>
            </div>


                <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion"
                        src="./imagenes/imagenes/icon_add.png" alt="Botón Añadir" height="12" width="15">AÑADIR</button>
                <a href="{{ route('mesas.index') }}" class="btn btn-link"><img id="img_cerrarSesion"
                        src="./imagenes/imagenes/icon_add.png" alt="Botón Flecha" height="12" width="15">Regresar al listado
                    de mesas</a>
            </form>
        </div>
    </div>
@endsection
