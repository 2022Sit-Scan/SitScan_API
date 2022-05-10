@extends('layout')

@section('title', 'Lista de productos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Lista de productos</h1>             
                <p><a href="#" class="btn btn-primary">Crear producto</a></p>
                
                @includeWhen($view == 'index', 'productos._filters')
                
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->title }}</td>
                        <td>{{ $producto->author->name }}</td>
                        <td>
                                {{--<a href="{{ route('productos.update', $producto) }}" class="btn btn-default">Editar</a>
                                <a href="#">Reportar problema</a>--}}
                                <a href="{{ route('productos.destroy', $producto) }}" class="btn btn-default">Eliminar</a> 
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $productos->links() }}
            </div>
        </div>
    </div>
@endsection
