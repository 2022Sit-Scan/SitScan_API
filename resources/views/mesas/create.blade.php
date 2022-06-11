@extends('layout')

@section('title', 'CREAR MESA')

@section('content')
        <h1 class="pt-3">CREAR MESA</h1>

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
                <label for="establecimiento_id">Establecimiento:</label>
                <select class="form-control" id="establecimiento_id" name="establecimiento_id">
                    <option selected disabled>Elige Establecimiento</option>
                    @foreach ($establecimientos as $establecimiento)
                        <option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-add"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/icon_add.svg')}} " alt="Botón Añadir" height="12" width="15">AÑADIR</button>
            <a href="{{ route('mesas.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="{{asset('/imagenes/imagenes/flecha.png')}}" alt="Botón Flecha" height="15" width="30">Regresar
                al listado de mesas</a>
            </form>
@endsection
