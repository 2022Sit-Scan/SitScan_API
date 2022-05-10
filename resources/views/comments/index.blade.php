@extends('layout')

@section('title', 'Lista de Comentarios')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <p>
            <a href="{{ route('comments.create') }}" class="btn btn-primary">Nuevo comentario</a>
        </p>
    </div>

    @if ($comments->isNotEmpty())
    {{-- {{dd($comments)}} --}}
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col" class="w-55">Texto</th>
            <th scope="col">producto</th>
            <th scope="col">Usuario</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
        <tr>
            <th scope="row">{{ $comment->id }}</th>
            <td>{{ $comment->body }}</td>
            <td>{{ $comment->producto_id }}</td>
            <td>{{ $comment->user->name }}</td>
            <td>
                <a href="{{ route('comments.show', $comment) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('comments.edit', $comment) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('comments.destroy', $comment) }}" method="producto">
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
        <p>No hay comentarios registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection