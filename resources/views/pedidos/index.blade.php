@extends('layout')

@section('title', 'Lista de Pedidos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Nueva pedido</a>
        </p>
    </div>

    @if ($pedidos != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Mesa</th>
            <th scope="col">Estado</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody>
            
        @foreach($pedidos as $pedido)
        <tr>
            <th scope="row">{{ $pedido->id }}</th>
            <td>{{ $pedido->establecimiento->nombre }}</td>
            <td>{{ $pedido->cantidad }}</td>
            <td>{{ $pedido->mesa_id }}</td>
            <td>{{ $pedido->estado }}</td>
            <td>{{ $pedido->nombreCliente }}</td>
            <td>
                <a href="{{ route('pedidos.show', $pedido) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('pedidos.destroy', $pedido) }}" method="POST">
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
        <p>No hay pedidos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection