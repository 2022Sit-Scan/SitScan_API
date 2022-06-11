@extends('layout')

@section('title', "EDITAR CARTA")

@section('content')
<h1 class="pt-3">EDITAR CARTA</h1>

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

<form method="POST" action="{{ url("cartas/{$carta->id}") }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $carta->nombre) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}
    </div>
    </div>
    @enderror--}}

    <br>
    <div class="form-group">
        <label for="establecimiento_id">Establecimiento:</label>
        <select class="form-control" id="establecimiento_id" name="establecimiento_id">
            <option selected disabled value='Establecimiento'>Establecimiento</option>
            @foreach ($establecimientos as $establecimiento)
            <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary"><img id="img_cerrarSesion" src="../../imagenes/imagenes/icon_modificar.png" alt="Botón Modificar" height="12" width="15">MODIFICAR</button>
    <a href="{{ route('cartas.index') }}" class="btn btn-link link-atras"><img id="img_cerrarSesion" src="../../imagenes/imagenes/flecha.png" alt="Botón Flecha" height="15" width="30">Regresar al listado de cartas</a>
</form>
@endsection