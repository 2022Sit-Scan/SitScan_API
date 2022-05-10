@extends('layout')

@section('title', "Usuario {$usuario->id}")

@section('content')
    <h1>Usuario #{{ $usuario->id }}</h1>

    <p>Nombre del usuario: {{ $usuario->name }}</p>
    <p>Correo electrónico: {{ $usuario->email }}</p>

    <p>
        <a href="{{ route('usuarios.index') }}">Regresar al listado de usuarios</a>
        {{-- otra forma, usando el helper action
        <a href="{{ action('usuarioController@index') }}">Regresar al listado de usuarios</a> --}}
    </p>
@endsection