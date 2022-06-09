@extends('layout')

@section('title', 'LISTA DE CARTAS')

@section('content')

<div class="row no-gutters">
  <div class="col-12 col-md-12 col-lg-8"><h1 class="pb-1">@yield('title')</h1></div>
  <div class="col-6 col-md-6 col-lg-2">
  <a href="#ventana1" id="cerrarSesion" class="btn btn-primary" data-toggle="modal"><img id="img_cerrarSesion" src="./imagenes/imagenes/icon_cerrarSesion.png" alt="Botón Cerrar Sesión" height="12" width="15">CERRAR SESION</a>

    <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
          <button type="button" id="btn_cerrar" class="close" data-dismiss="modal" aria-label="Close">
            <img src="./imagenes/imagenes/close.png" alt="Botón Close" height="26" width="26">
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button"  id="btn-cancelar-cerrarSesion-cartas" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button"  id="btn-aceptar-cerrarSesion-cartas"  class="btn btn-primary-logout col-md-6">
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
  </div>

  <div class="col-6 col-md-6 col-lg-2">
        <p>
            <a href="{{ route('cartas.create') }}" class="btn btn-primary" id="addProducto"> <img src="./imagenes/imagenes/icon_add.png" alt="Editar" height="15" width="15"> NUEVA CARTA </a>
        </p>
    </div>
</div>

    @if ($cartas != "")
    <table class="table">
        <thead class="thead">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">ESTABLECIMIENTO</th>
            <th scope="col">ACCIONES</th>
        </tr>
        </thead>
        <tbody>
            
        @foreach($cartas as $carta)
        <tr class="fila-tabla">
            <th scope="row">{{ $carta->id }}</th>
            <td>{{ $carta->nombre }}</td>
            <td>{{ $carta->establecimiento->nombre}}</td>
          
            <td>
                <a href="{{ route('cartas.edit', $carta) }}" class="btn btn-link"><img src="./imagenes/imagenes/icon_edit.svg" alt="Editar" height="25" width="25"></a>
                <form action="{{ route('cartas.destroy', $carta) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="btn btn-link"><img src="./imagenes/imagenes/icon_delete.svg" alt="Editar" height="20" width="20"></button>
                </form>                
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay cartas registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection