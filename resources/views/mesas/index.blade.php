@extends('layout')

@section('title', 'Lista de Mesas')

@section('content')
    <div class="row no-gutters">
        <div class="col-12 col-md-12 col-lg-8">
            <h1 class="pb-1">@yield('title')</h1>
        </div>
        <div class="col-6 col-md-6 col-lg-2">
            <a href="#ventana1" id="cerrarSesion" class="btn btn-primary" data-toggle="modal"><img id="img_cerrarSesion"
                    src="./imagenes/imagenes/icon_cerrarSesion.png" alt="Botón Cerrar Sesión" height="12" width="15">CERRAR
                SESIÓN</a>

            <!-- Modal -->
            <div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
                            <button type="button" id="btn_cerrar" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <img src="./imagenes/imagenes/close.png" alt="Botón Close" height="26" width="26">
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Desea cerrar sesión?
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn-cancelar-cerrarSesion-mesas"
                                class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

                            <button type="button" id="btn-aceptar-cerrarSesion-mesas"
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
            <p>
                <a href="{{ route('mesas.create') }}" class="btn btn-primary">NUEVA MESA</a>
            </p>
        </div>

        @if ($mesas != '')
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NÚMERO MESA</th>
                        <th scope="col">CÓDIGO QR</th>
                        <th scope="col">ESTABLECIMIENTO</th>
                        <th scope="col">ACCIONES</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($mesas as $mesa)
                        <tr class="fila-tabla">
                            <th scope="row">{{ $mesa->id }}</th>
                            <td>{{ $mesa->numero_mesa }}</td>
                            <td>{{ $mesa->codigoQR }}</td>
                            <td>{{ $mesa->establecimiento->nombre }}</td>
                            <td>
                                <a href="{{ route('mesas.edit', $mesa) }}" class="btn btn-link"><img
                                        src="./imagenes/imagenes/icon_edit.svg" alt="Editar" height="26"
                                        width="26"></span></a>
                                <form action="{{ route('mesas.destroy', $mesa) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link"><img
                                            src="./imagenes/imagenes/icon_delete.svg" alt="Botón Eliminar" height="26"
                                            width="26"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay mesas registrados.</p>
        @endif
    @endsection

    @section('sidebar')
        @parent
    @endsection
