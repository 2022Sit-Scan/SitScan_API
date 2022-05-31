@extends('layout')

@section('title', 'Lista de Pedidos')

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
            <a href="{{ route('pedidos.create') }}" class="btn btn-primary">COMPLETADOS</a>
        </p>
    </div>

    @if ($pedidos != "")
    <table class="table">
        <thead class="thead-dark">
        
        </thead>
        <tbody>

            <div class="card-body-pedido">
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
            </div>
            
        @foreach($pedidos as $pedido)
        <tr>
            <th scope="row">{{ $pedido->id }}</th>
            <td>{{ $pedido->establecimiento->nombre }}</td>
            <td>{{ $pedido->cantidad }}</td>
            <td>{{ $pedido->mesa_id }}</td>
            <td>{{ $pedido->estado }}</td>
            <td>{{ $pedido->nombreCliente }}</td>
            <td>
                <a href="{{ route('pedidos.show', $pedido) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <form action="{{ route('pedidos.destroy', $pedido) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>                
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay pedidos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection