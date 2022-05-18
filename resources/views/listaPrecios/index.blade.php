@extends('layout')

@section('title', 'Lista de Precios')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('listaprecios.create') }}" class="btn btn-primary">Añadir Producto</a>
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
            <td>{{ $establecimientoProducto->establecimiento }}</td>
            <td>{{ $establecimientoProducto->producto_id }}</td>
            <td>{{ $establecimientoProducto->precio }}</td>
            <td>
                <a href="{{ route('listaprecios.show', $establecimientoProducto) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('listaprecios.edit', $establecimientoProducto) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('listaprecios.destroy', $establecimientoProducto) }}" method="POST">
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