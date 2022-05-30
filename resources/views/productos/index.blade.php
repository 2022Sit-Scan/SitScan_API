@extends('layout')

@section('title', 'Lista de Productos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Lista de productos</h1>             
                <p><a href="{{ route('productos.create') }}" class="btn btn-primary">Crear producto</a></p>
                
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">URL</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                 
                    @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>{{ $producto->urlImagen }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                            </form>   
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
@endsection
