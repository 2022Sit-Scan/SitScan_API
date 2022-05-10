@extends('layout')

@section('title', 'Lista de Productos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Lista de productos</h1>             
                <p><a href="#" class="btn btn-primary">Crear producto</a></p>
                
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>
                                {{--<a href="{{ route('productos.update', $producto) }}" class="btn btn-default">Editar</a>
                                <a href="#">Reportar problema</a>--}}
                                <a href="{{ route('productos.destroy', $producto) }}" class="btn btn-default">Eliminar</a> 
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
