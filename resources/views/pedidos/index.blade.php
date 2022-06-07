@extends('layout')

@section('title', 'LISTA DE PEDIDOS')

@section('content')

<div class="row no-gutters justify-content-between">
  <div class="col-12 col-md-12 col-lg-8">
    <h1 class="pb-1">@yield('title')</h1>
  </div>
  <div class="col-6 col-md-6 col-lg-2">
    <a href="{{ route('pedidos.create') }}" id="btn_completado" class="btn btn-primary"><img src="imagenes/imagenes/icon_completado.png" alt="Botón Completado" height="20" width="20">COMPLETADOS</a>
  </div>
</div>

@if ($pedidos != "")
<div class="row">
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card card-carta">
      <div class="card-header card-header-carta fondo">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-4">
              MESA
            </div>
            <div class="col-4">
              HORA DEL PEDIDO
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <tbody>
            <tr>
              <td>Coca Cola Zero</td>
              <td>5</td>
              <td>8.00 €</td>
            </tr>
            <tr>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <p class="text-right">Precio Total</p>
      </div>
      <div class="card-footer card-footer-carta">
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-hecho"><img src="imagenes/imagenes/icon_hecho.png" alt="Botón Hecho" height="12" width="20">HECHO</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card card-carta">
      <div class="card-header card-header-carta id" setBackground();>
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-4">
              MESA
            </div>
            <div class="col-4">
              HORA DEL PEDIDO
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <tbody>
            <tr>
              <td>Producto 1</td>
              <td>Cantidad</td>
              <td>Precio</td>
            </tr>
            <tr>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <p class="text-right">Precio Total</p>
      </div>
      <div class="card-footer card-footer-carta">
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-hecho"><img src="imagenes/imagenes/icon_hecho.png" alt="Botón Hecho" height="12" width="20">HECHO</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card card-carta">
      <div class="card-header card-header-carta fondo">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-4">
              MESA
            </div>
            <div class="col-4">
              HORA DEL PEDIDO
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <tbody>
            <tr>
              <td>Producto 1</td>
              <td>Cantidad</td>
              <td>Precio</td>
            </tr>
            <tr>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <p class="text-right">Precio Total</p>
      </div>
      <div class="card-footer card-footer-carta">
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-hecho"><img src="imagenes/imagenes/icon_hecho.png" alt="Botón Hecho" height="12" width="20">HECHO</a>
      </div>
    </div>
  </div>
</div>

<table class="table">
  <thead class="thead">

  </thead>
  <tbody>

    <!-- <div class="card-body-pedido">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group-titulo-mesa row">
                        <label class="label col-md-12 col-form-label">{{ __('MESA 1') }}</label>
                    </div>

                    <div class="form-group-titulo row">
                        
                        <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('') }}</label>
                    </div>

                    <div class="form-group-titulo row">
                        
                        <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('') }}</label>
                    </div>

                    <div class="form-group-titulo row">
                        
                        <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('') }}</label>
                    </div>

                    <div class="form-group-titulo row">
                        
                        <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('') }}</label>
                    </div>

                    <div class="form-group-hecho  row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-primary-mesa">
                                {{ __('HECHO') }}
                            </button>

                            @if (Route::has('password.request'))
                                
                            @endif
                        </div>
                    </div>
                </form>
            </div> -->

    @foreach($pedidos as $pedido)
    <tr class="fila-tabla">
      <th scope="row">{{ $pedido->id }}</th>
      <td>{{ $pedido->establecimiento->nombre }}</td>
      <td>{{ $pedido->cantidad }}</td>
      <td>{{ $pedido->mesa_id }}</td>
      <td>{{ $pedido->estado }}</td>
      <td>{{ $pedido->nombreCliente }}</td>
      <td>
        <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-link"><img src="imagenes/imagenes/icon_edit.svg" alt="Editar" height="30" width="30"></span></a>
        <form action="{{ route('pedidos.destroy', $pedido) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Editar" height="26" width="26"></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="col align-self-end col-6 col-md-6 col-lg-2">
  <a href="#ventana1" id="cerrarSesion" class="btn btn-primary" data-toggle="modal"><img id="img_cerrarSesion" src="imagenes/imagenes/icon_cerrarSesion.png" alt="Botón Cerrar Sesión" height="12" width="15">CERRAR SESIÓN</a>

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
          <button type="button" id="btn-cancelar-cerrarSesion-alergenos" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button" id="btn-aceptar-cerrarSesion-listPrecios" class="btn btn-primary-logout col-md-6">
            <div id="navbarDropdown" class="btn-primary-logout" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
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
@else
<p>No hay pedidos registrados.</p>
@endif
@endsection

@section('sidebar')
@parent
@endsection