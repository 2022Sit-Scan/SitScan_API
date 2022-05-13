@extends('layout')

@section('title', 'Lista de Mesas')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('mesas.create') }}" class="btn btn-primary">Nueva Mesa</a>
        </p>
    </div>

    @if ($mesas != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Numero Mesa</th>
            <th scope="col">Codigo QR</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody>
            
        @foreach($mesas as $mesa)
        <tr>
            <th scope="row">{{ $mesa->id }}</th>
            <td>{{ $mesa->numero_mesa }}</td>
            <td>{{ $mesa->codigoQR }}</td>
            <td>{{ $mesa->establecimiento->nombre }}</td>
            <td>
                <a href="{{ route('mesas.show', $mesa) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('mesas.edit', $mesa) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('mesas.destroy', $mesa) }}" method="POST">
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
        <p>No hay mesas registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection