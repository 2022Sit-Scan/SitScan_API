@extends('layout')

@section('title', "Crear comentario")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear comentario</h4>
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

            <form method="POST" action="{{ url('comments') }}">
                {{ csrf_field() }}

                <div class="row row-filters ">
                    <div class="col-md-12">
                            <div class="btn-group mr-3 mb-3">
                                <select name="usuario" id="usuario" class="select-field">
                                    <option value="all" selected>Elija el usuario</option>    
                                    @foreach($usuarios as $usuario)                        
                                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="btn-group mr-3 mb-3">
                                <select name="post" id="post" class="select-field">
                                    <option value="all" selected>Elija el post</option>    
                                    @foreach($posts as $post)                        
                                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                                    @endforeach
                                </select>
                            </div>                            
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                

                <button type="submit" class="btn btn-primary">Crear comentario</button>
                <a href="{{ route('comments.index') }}" class="btn btn-link">Regresar al listado de comentarios</a>
            </form>
        </div>
    </div>
@endsection