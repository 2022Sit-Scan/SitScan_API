@extends('layout')

@section('title', 'Lista de Categorias')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <a href="#ventana1" class="btn btn-primary btn-lg" data-toggle="modal">CERRAR SESION</a>
    <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button" id="btn-cancelar-cerrarSesion-categorias" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button" id="btn-aceptar-cerrarSesion-categorias" class="btn btn-primary-logout col-md-6">
            <div id="navbarDropdown" class="btn-primary-logout" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre
            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                {{ __('CERRAR SESIÓN') }}
                <div class="modal fade" id="ventan">
            
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </button>
        </div>
      </div>
    </div>
</div>
        <p>
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Nueva categoria</a>
        </p>
    </div>

    @if ($categorias->isNotEmpty())
    {{-- {{dd($categorias)}} --}}
    <table class="table">
        <thead class="thead">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria Padre</th>
            <th scope="col">Url Imagen</th>
            <th scope="col">Imagenes</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
        <tr class="fila-tabla">
            <th scope="row">{{ $categoria->id }}</th>
            <td>{{ $categoria->nombre }}</td>
            
            <td>@if ($categoria->categoriaPadre != NULL){{ $categoria->catHijos->first()->nombre }}@endif</td>
            <td>{{ $categoria->urlImagen }}</td>
            <td><img src="..{{$categoria->urlImagen}}"/></td>
            <td>
                <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-link"><img src="imagenes/imagenes/icon_edit.svg" alt="Editar" height="30" width="30"></span></a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Editar" height="26" width="26"></button>
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