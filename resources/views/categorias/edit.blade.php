@extends('layout')

@section('title', "Editar comentario")

@section('content')
    <div class="card">
        <h4 class="card-header">Editar comentario</h4>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor corrige los errores debajo:</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url("comments/{$comment->id}") }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="row row-filters ">
                    <div class="col-md-12">
                            <div class="btn-group mr-3 mb-3">
                                <select name="usuario" id="usuario" class="select-field">
                                    <option value="all" selected>Elija el usuario</option>    
                                    @foreach($usuarios as $usuario)                        
                                    <option value="{{ $usuario->id }}" {{ $comment->usuario->id == $usuario->id ? ' selected' : '' }}>{{ $usuario->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="btn-group mr-3 mb-3">
                                <select name="post" id="post" class="select-field">
                                    <option value="all" selected>Elija el post</option>    
                                    @foreach($posts as $post)                        
                                    <option value="{{ $post->id }}" {{ $comment->post->id == $post->id ? ' selected' : '' }}>{{ $post->title }}</option>
                                    @endforeach
                                </select>
                            </div>                            
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" name="body" id="descripcion" rows="3">{{ old('body', $comment->body) }}</textarea>
                        </div>
                    </div>
                </div>

                

                <button type="submit" class="btn btn-primary">Editar comentario</button>
                <a href="{{ route('comments.index') }}" class="btn btn-link">Regresar al listado de comentarios</a>
            </form>
        </div>
    </div>
@endsection