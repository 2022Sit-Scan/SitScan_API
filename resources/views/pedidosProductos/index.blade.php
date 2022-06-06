@extends('layout')

@section('title', 'Lista de PedidosProductos')

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
    </div>

    @if ($pedidoProductos != "")
    <table class="table">
        <thead class="thead">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Nombre Producto</th>
            <th scope="col">Mesa</th>
            <th scope="col">Precio</th>
            <th scope="col">Hora</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody>
             
        @foreach($pedidoProductos as $pedidoProducto)
        @foreach($pedidoProducto->productos as $pedido)
        @foreach($pedido->establecimientos as $ped)
        <tr class="fila-tabla">
            <th scope="row">{{ $pedidoProducto->id}}</th>
             <td>{{$pedidoProducto->cantidad }}</td> 
              <td>{{ $pedido->nombre }}</td>
              <td>{{$pedidoProducto->mesa->numero_mesa}}</td>
                <td>{{$ped->pivot->precio}}</td>
            <td>Hora</td>
            <td>{{ $pedidoProducto->estado}}</td>

            <td> 
              
                <form action="{{ url("pedidos/$pedidoProducto") }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button  type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Editar" height="26" width="26"></button>
                </form>                
            </td>
        </tr>
         @endforeach
        @endforeach
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay pedidoProductos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection