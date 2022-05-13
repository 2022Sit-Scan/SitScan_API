@extends('layout')

@section('title', 'Lista de Cartas')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('cartas.create') }}" class="btn btn-primary">Nueva carta</a>
        </p>
    </div>

    @if ($cartas != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
            
        @foreach($cartas as $carta)
        <tr>
            <th scope="row">{{ $carta->id }}</th>
            <td>{{ $carta->email }}</td>
            <td>{{ $carta->establecimiento->nombre}}</td>
          
            <td>
                <a href="{{ route('cartas.show', $carta) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('cartas.edit', $carta) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('cartas.destroy', $carta) }}" method="POST">
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
        <p>No hay cartas registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection