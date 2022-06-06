@extends('layout')

@section('title', 'LISTA DE PRODUCTOS')

@section('content')

<div class="row no-gutters">
  <div class="col-12 col-md-12 col-lg-8"><h1 id="HoraActual"></h1></div>
  <div class="col-6 col-md-6 col-lg-2">
  <a href="#ventana1" id="cerrarSesion" class="btn btn-primary" data-toggle="modal"><img id="img_cerrarSesion" src="imagenes/imagenes/icon_cerrarSesion.png" alt="Botón Cerrar Sesión" height="12" width="15">CERRAR SESION</a>
  
  <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
          <button type="button" id="btn_cerrar" class="close" data-dismiss="modal" aria-label="Close">
          <img src="imagenes/imagenes/close.png" alt="Botón Close" height="26" width="26">
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button" id="btn-cancelar-cerrarSesion-listPrecios" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button" id="btn-aceptar-cerrarSesion-listPrecios" class="btn btn-primary-logout col-md-6">
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
      <a href="{{ route('listaprecios.create') }}" class="btn btn-primary" id="addProducto"> <img src="imagenes/imagenes/icon_add.png" alt="Editar" height="15" width="15"> AÑADIR PRODUCTO </a>
    </p>
  </div>
</div>

<div class="row no-gutters">
  <div class="col-12 col-lg-8">
  <h1 class="pb-1">@yield('title')</h1>
  </div>
  <div class="col-12 col-lg-4 ">
     
       <div class="row ">
        <div class="col-9 col-lg-9">
          <input class="form-control buscador" type="search" placeholder="Buscar" aria-label="Search">
        </div>
        <div class="col-3 col-lg-3">
          <button class="btn btn-buscar" type="submit"><img id="img_lupa" src="imagenes/imagenes/icon_lupa.png" alt="Editar" height="25" width="25"></button>
        </div>
        </div>
  </div>
</div>

    @if ($establecimientoProductos != "")
    <table class="table">
        <thead class="thead">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE DEL PRODUCTO</th>
            <th scope="col">PRECIO</th>
            <th scope="col">ACCIONES</th> 
        </tr>
        </thead>
        <tbody>
          
           {{--  {{dd($establecimientoProductos)}}  --}}
        @foreach($establecimientoProductos as $establecimientoProducto)
         @foreach($establecimientoProducto->productos as $establec)
        <tr class="fila-tabla">
            
            <th scope="row">{{ $establec->id }}</th>
            <td>{{ $establec->nombre }}</td>
            <td>{{ $establec->pivot->precio }} €</td>
            <td>
                <a href="#ventana2" class="btn btn-link" data-toggle="modal"><img src="imagenes/imagenes/icon_edit.svg" alt="Editar" height="25" width="25"></a>
                <div class="modal fade" id="ventana2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">EDITAR PRODUCTO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ¿Desea editar el producto?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary-logout col-md-6">
                          <div id="navbarDropdown" class="btn-primary-logout" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre
                          onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                              {{ __('EDITAR') }}
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
                <form action="{{ route('listaprecios.destroy', $establecimientoProducto) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Editar" height="20" width="20"></button>
                </form>                
            </td>
        </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay establecimiento Productos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection