@extends('layout')

@section('title', 'Lista de alergenos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('alergenos.create') }}" class="btn btn-primary">Nuevo alergeno</a>
        </p>
    </div>

    @if ($alergenos != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Url Imagen</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody>
            
        @foreach($alergenos as $alergeno)
        <tr>
            <th scope="row">{{ $alergeno->id }}</th>
            <td>{{ $alergeno->nombre }}</td>
            <td>{{ $alergeno->urlImagen }}</td>
            <td>
                <a href="{{ route('alergenos.show', $alergeno) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('alergenos.edit', $alergeno) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('alergenos.destroy', $alergeno) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>                
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay alergenos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection