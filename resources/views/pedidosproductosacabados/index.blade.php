@extends('layout')

@section('title', 'PEDIDOS COMPLETADOS')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">

        <h1 class="pb-1">@yield('title')</h1>

        <a href="{{ url()->previous() }}" class="btn btn-primary" id="btn_completados-volver"> <img
                src="{{ asset('/imagenes/imagenes/flecha-web.png') }}" alt="Botón Completados" height="15" width="22">
            VOLVER A PEDIDOS</a>


    </div>

    @if ($pedidoSI != '')
        <div class="row">
            @foreach ($pedidoSI as $pedidoinfo)
                @php
                    $ptotal = 0;
                    $ptotalproducto = 0;
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card card-carta">
                        <div class="card-header card-header-carta-volver fondo-volver">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    MESA {{ $pedidoinfo->mesa->numero_mesa }}
                                </div>
                                <div class="col-6">
                                    {{ $pedidoinfo->created_at }}
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody class="col-12">
                                    @foreach ($pedidoinfo->productos as $productos)
                                        <tr>
                                            @php
                                                $ptotalproducto = $productos->pivot->cantidad * $productos->precio;
                                            @endphp
                                            <td> {{ $productos->pivot->cantidad }}</td>
                                            <td class="producto"> {{ $productos->nombre }}</td>
                                            <td class="precio">{{ $ptotalproducto }} €</td>
                                            @php
                                                $ptotal += $ptotalproducto;
                                            @endphp
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <p class="text-right">Precio Total: {{ $ptotal }} €</p>
                        </div>

                        <form method="POST" style="margin:0px;" action="{{ url("pedidos/{$pedidoinfo->id}") }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="card-footer card-footer-carta">
                                <button type="submit" class="btn btn-primary btn-hecho-volver"><img
                                        src="{{ asset('/imagenes/imagenes/icon-restaurar.svg') }}" alt="Botón Hecho"
                                        height="15" width="23">RESTAURAR</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No hay pedidos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection
