@extends('layout')

@section('title', 'Lista de PedidosProductos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('pedidosproductos.create') }}" class="btn btn-primary">Nueva pedidoProducto</a>
        </p>
    </div>

    @if ($pedidoProductos != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Nombre Producto</th>
            <th scope="col">Mesa</th>
            <th scope="col">Precio</th>
            <th scope="col">Hora</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody>
            
        @foreach($pedidoProductos as $pedidoProducto)
            @foreach($pedidoProducto->productos as $pedid)
        <tr>
            <th scope="row">{{ $pedidoProducto->id }}</th>
            <td>{{ $pedidoProducto->establecimiento->nombre }}</td>
            <td>{{ $pedidoProducto->cantidad }}</td>    
            <td>{{ $pedid->nombre }}</td>
            <td>{{ $pedidoProducto->mesa_id }}</td>
            <td>{{ $pedid->pivot}}</td>
            <td>{{ $pedidoProducto->created_at }}</td>
            <td>{{ $pedidoProducto->estado }}</td>

            <td> 
              
                <form action="{{ url("pedidos/$pedidoProducto->id") }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>                
            </td>
        </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay pedidoProductos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection