@extends('layout')

@section('title', 'Lista de Alergenos')

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
          <button type="button" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button" class="btn btn-primary-logout col-md-6">
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
            <a href="{{ route('alergenos.create') }}" class="btn btn-primary">Nuevo alergeno</a>
        </p>
    </div>

    @if ($alergenos != "")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Url Imagen</th>
            <th scope="col">Imagenes</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody>
            
        @foreach($alergenos as $alergeno)
        <tr>
            <th scope="row">{{ $alergeno->id }}</th>
            <td>{{ $alergeno->nombre }}</td>
            <td>{{ $alergeno->urlImagen }}</td>
            <td><img src="..{{$alergeno->urlImagen}}"/></td>
            <td>
                <a href="{{ route('alergenos.edit', $alergeno) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('alergenos.destroy', $alergeno) }}" method="POST">
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
        <p>No hay alergenos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection