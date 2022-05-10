@extends('layout')

@section('title', "Comentario {$comment->id}")

@section('content')
    <h1>Comentario #{{ $comment->id }}</h1>

    <p>Usuario que lo envio: {{ $comment->usuario->name }}</p>
    <p>producto: {{ $comment->producto_id }}</p>

    <p>
        <a href="{{ route('comments.index') }}">Regresar al listado de comentarios</a>
    </p>
@endsection