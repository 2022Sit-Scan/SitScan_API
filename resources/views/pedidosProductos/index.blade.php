@extends('layout')

@section('title', 'PEDIDOS')

@section('content')
    <div class="row no-gutters">

        <div class="col-12 col-md-12 col-lg-8">
            <h1 id="HoraActual"></h1>
        </div>
        <div class="col-12 col-lg-4 mb-3">
            <p class="btn-centrado">
                <a href="{{ url('/pedidosacabados') }}" class="btn btn-primary" id="btn_completados"> <img
                        src="{{ asset('/imagenes/imagenes/icon_completado.png') }}" alt="Botón Completados" height="15"
                        width="15">COMPLETADOS</a>
            </p>
        </div>
        <div class="col-12 col-md-12 col-lg-8">
            <h1 class="pb-1">@yield('title')</h1>
        </div>
    </div>

    @php
    $fondorandom = [' style="background-color: #E29C7E"', ' style="background-color: #380F19"', ' style="background-color: #288028"', ' style="background-color: #000000"', ' style="background-color: #F3A114"', ' style="background-color: #26BCCB"', ' style="background-color: #B1CB26"', ' style="background-color: #3B26CB"', ' style="background-color: #CB2626"', ' style="background-color: #C626CB"', ' style="background-color: #FF0000"', ' style="background-color: #675050"', ' style="background-color: #12E37B"', ' style="background-color: #436152"'];
    @endphp

    @if ($pedidoNO != '')
        <div class="row">
            @foreach ($pedidoNO as $pedidoinfo)
                @php
                    $ptotal = 0;
                    $ptotalproducto = 0;
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card card-carta">
                        <div class="card-header card-header-carta" @php echo $fondorandom[rand(0,13)] @endphp>
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
                                <button type="submit" class="btn btn-primary btn-hecho"><img
                                        src="{{ asset('/imagenes/imagenes/icon_hecho.png') }}" alt="Botón Hecho"
                                        height="12" width="20">HECHO</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
            <div id="centrado" class="col-12">
                <a href="#ventana1" class="btn btn-primary" data-toggle="modal"><img id="img_cerrarSesion"
                        src="{{ asset('/imagenes/imagenes/icon_cerrarsesion.png') }}" alt="Botón Cerrar Sesión"
                        height="12" width="15">CERRAR SESIÓN</a>
                <!-- Modal -->
                <div class="modal fade" id="ventana1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
                                <button type="button" id="btn_cerrar" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <img src="{{ asset('/imagenes/imagenes/close.png') }}" alt="Botón Close" height="26"
                                        width="26">
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Desea cerrar sesión?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary-logout col-md-6"
                                    data-dismiss="modal">CANCELAR</button>

                                <button type="button" id="btn-aceptar-cerrarSesion-pedidosProductos"
                                    class="btn btn-primary-logout col-md-6">
                                    <div id="navbarDropdown" class="btn-primary-logout" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        {{ __('CERRAR SESIÓN') }}
                                        <div class="modal fade" id="ventan">

                                        </div>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL -->
            </div>
        @else
            <p>No hay pedidos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection


<script type="text/javascript">
    function actualizar() {
        location.reload(true);
    }
    //Función para actualizar cada 60 segundos(60000 milisegundos)
    setInterval("actualizar()", 60000);
</script>
