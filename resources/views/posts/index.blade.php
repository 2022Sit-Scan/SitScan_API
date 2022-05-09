@extends('layout')

@section('title', 'Lista de Posts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Lista de Posts</h1>             
                <p><a href="#" class="btn btn-primary">Crear post</a></p>
                
                @includeWhen($view == 'index', 'posts._filters')
                
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
                    @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author->name }}</td>
                        <td>
                                {{--<a href="{{ route('posts.update', $post) }}" class="btn btn-default">Editar</a>
                                <a href="#">Reportar problema</a>--}}
                                <a href="{{ route('posts.destroy', $post) }}" class="btn btn-default">Eliminar</a> 
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
