@extends('layout')

@section('title', 'Lista de Usuarios')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Nuevo usuario</a>
        </p>
    </div>

    @if ($usuarios->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Correo</th>
            <th scope="col">Establecimiento</th>
            <th scope="col" class="w-55">Password</th>
            <th scope="col">Rol</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <th scope="row">{{ $usuario->id }}</th>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->establecimiento_id }}</td>
            <td>{{ $usuario->password }}</td>
            <td>{{ $usuario->rol }}</td>
            <td>
                <a href="{{ route('usuarios.show', $usuario) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
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
        <p>No hay usuarios registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection