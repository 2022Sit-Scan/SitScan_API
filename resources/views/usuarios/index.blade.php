@extends('layout')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="row no-gutters">
  <a href="#ventana1" id="cerrarSesion" class="btn btn-primary" data-toggle="modal"><img id="img_cerrarSesion" src="imagenes/imagenes/icon_cerrarSesion.png" alt="Boton Cerrar Sesión" height="12" width="15">CERRAR SESION</a>
  
  <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
          <button type="button" id="btn_cerrar" class="close" data-dismiss="modal" aria-label="Close">
          <img src="imagenes/imagenes/close.png" alt="Close" height="26" width="26">
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button" id="btn-aceptar-cerrarSesion" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button" id="btn-cancelar-cerrarSesion" class="btn btn-primary-logout col-md-6">
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
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary"><img src="imagenes/imagenes/icon_add.png" alt="Editar" height="15" width="15">NUEVO USUARIO</a>
    </p>
</div>

    @if ($usuarios != "")
    <table class="table">
        <thead class="thead">
        <tr>    
            <th scope="col">ID</th>
            <th scope="col">Correo</th>
            <th scope="col">Establecimiento</th>
            <th scope="col" >Password</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
            
        @foreach($usuarios as $usuario)
        <tr class="fila-tabla">
            <th scope="row">{{ $usuario->id }}</th>
            <td>{{ $usuario->email }}</td>
            <td>@if($usuario->establecimiento_id != 0){{ $usuario->establecimiento->nombre }}@endif</td>
            <td>{{ $usuario->password }}</td> 
            <td>{{ $usuario->rol }}</td>
            <td>
                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-link"><img src="imagenes/imagenes/icon_edit.svg" alt="Editar" height="26" width="26"></span></a>
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Editar" height="26" width="26"></button>
                </form>                
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @else
        <p>No hay usuarios registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection