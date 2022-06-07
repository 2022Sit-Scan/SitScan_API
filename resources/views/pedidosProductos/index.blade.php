@extends('layout')

@section('title', 'Lista de PedidosProductos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">@yield('title')</h1>
        <a href="#ventana1" class="btn btn-primary btn-lg" data-toggle="modal">CERRAR SESION</a>
        <!-- Modal -->
        <div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
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
                            <div id="navbarDropdown" class="btn-primary-logout" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false" v-pre onclick="event.preventDefault();
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

    @if ($pedidoNO != '')
    <div class="row">
        @foreach ($pedidoNO as $pedidoinfo)
        @php
          $ptotal=0;
          $ptotalproducto=0;
         @endphp
                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card card-carta">
                        <div class="card-header card-header-carta fondo">
                            <div class="row justify-content-between">
                                <div class="col-4">
                                  MESA {{ $pedidoinfo->mesa->numero_mesa }}
                                </div>
                                <div class="col-4">
                                  {{ $pedidoinfo->created_at }};
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
                                        <td> {{ $productos->pivot->cantidad}}</td>
                                        <td> {{ $productos->nombre}}</td>
                                        <td>{{ $ptotalproducto}} €</td>
                                        @php
                                        $ptotal+=$ptotalproducto
                                      @endphp      
                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
                            <p class="text-right">Precio Total: {{$ptotal}} €</p>
                        </div>

                        <form method="POST" action="{{ url("pedidos/{$pedidoinfo->id}") }}">
                          {{ method_field('PUT') }}
                          {{ csrf_field() }}
                        <div class="card-footer card-footer-carta">
                            <button type="submit" class="btn btn-primary btn-hecho"><img
                              src="imagenes/imagenes/icon_hecho.png" alt="Botón Hecho" height="12"
                              width="20">HECHO</a></button>
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
