@extends('layout')

@section('title', 'Lista de Categorias')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Nueva categoria</a>
        </p>
    </div>

    @if ($categorias->isNotEmpty())
    {{-- {{dd($categorias)}} --}}
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria Padre</th>
            <th scope="col">Url Imagen</th>
            <th scope="col">Imagenes</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <th scope="row">{{ $categoria->id }}</th>
            <td>{{ $categoria->nombre }}</td>
            
            <td>@if ($categoria->categoriaPadre != NULL){{ $categoria->catHijos->first()->nombre }}@endif</td>
            <td>{{ $categoria->urlImagen }}</td>
            <td><img src="..{{$categoria->urlImagen}}"/></td>
            <td>
                <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
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
        <p>No hay categorias registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection