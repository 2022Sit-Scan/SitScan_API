@extends('layout')

@section('title', "Editar Carta")

@section('content')
    <h1>Editar Carta</h1>

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

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $carta->nombre) }}">
        {{-- otra forma de comprobar los errores 
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror--}}
        <br>
        <div class="form-group">
            <label for="establecimiento_id">Establecimiento</label>
            <select class="form-control" id="establecimiento_id" name="establecimiento_id">
                <option selected disabled value='Establecimiento'>Establecimiento</option>
                 @foreach ($establecimientos as $establecimiento)
              <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
                @endforeach
            </select>
          </div>
        <br>
        <button type="submit">Actualizar Carta</button>
    </form>

    <p>
        <a href="{{ route('cartas.index') }}">Regresar al listado de cartas</a>
        {{-- otra forma 
        <a href="{{ url()->previous() }}">Regresar al listado de cartas</a>--}}
    </p>
@endsection