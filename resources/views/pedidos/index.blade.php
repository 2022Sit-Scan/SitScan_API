@extends('layout')

@section('title', 'Lista de Pedidos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
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