@extends('layout')

@section('title', 'Lista de Establecimientos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('establecimientos.create') }}" class="btn btn-primary">Nueva establecimiento</a>
        </p>
    </div>

    @if ($establecimientos != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">URL Logo</th>
            <th scope="col">Acciones</th>
           
            
        </tr>
        </thead>
        <tbody>
            
        @foreach($establecimientos as $establecimiento)
        <tr>
            <th scope="row">{{ $establecimiento->id }}</th>
            <td>{{ $establecimiento->nombre }}</td>
            <td>{{ $establecimiento->urlLogo }}</td>
            
            <td>
                <a href="{{ route('establecimientos.show', $establecimiento) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('establecimientos.edit', $establecimiento) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('establecimientos.destroy', $establecimiento) }}" method="POST">
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
        <p>No hay establecimientos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection