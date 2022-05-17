@extends('layout')

@section('title', 'Lista de Precios')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('establecimientoProductos.create') }}" class="btn btn-primary">Nueva establecimientoProducto</a>
        </p>
    </div>

    @if ($establecimientoProductos != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody>
            
        @foreach($establecimientoProductos as $establecimientoProducto)
        <tr>
            <th scope="row">{{ $establecimientoProducto->id }}</th>
           // <td>{{ $establecimientoProducto->establecimiento->nombre }}</td>
            //<td>{{ $establecimientoProducto->cantidad }}</td>
            <td>
                <a href="{{ route('establecimientoProductos.show', $establecimientoProducto) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('establecimientoProductos.edit', $establecimientoProducto) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('establecimientoProductos.destroy', $establecimientoProducto) }}" method="POST">
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
        <p>No hay establecimientoProductos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection