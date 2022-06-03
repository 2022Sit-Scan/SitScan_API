@extends('layout')

@section('title', 'LISTA DE PRODUCTOS')

@section('content')

<div class="row no-gutters">
  <div class="col-12 col-md-12 col-lg-8"><h1 id="HoraActual"></h1></div>
  <div class="col-6 col-md-6 col-lg-2">
  <a href="#ventana1" id="cerrarSesion" class="btn btn-primary" data-toggle="modal"><img id="img_cerrarSesion" src="imagenes/imagenes/icon_cerrarSesion.png" alt="Editar" height="12" width="15">CERRAR SESION</a>
  
  <!-- Modal -->
<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
          <button type="button" id="btn_cerrar" class="close" data-dismiss="modal" aria-label="Close">
          <img src="imagenes/imagenes/close.png" alt="Editar" height="26" width="26">
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button" id="btn-aceptar-cerrarSesion-listPrecios" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button" id="btn-cancelar-cerrarSesion-listPrecios" class="btn btn-primary-logout col-md-6">
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
  <nav class="navbar navbar-light">
  <form class="form-inline">
  <div class="row ">
  <div class="col-6 col-lg-6">
    <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
  </div>
  <div class="col-6 col-lg-6">
    <button class="btn btn-buscar" type="submit"><img id="img_lupa" src="imagenes/imagenes/icon_lupa.png" alt="Editar" height="25" width="25"></button>
  </div>
  </div>
  </form>
</nav>
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
                    <div class="modal-body text-left">
                      <h5>¿Desea editar el producto?</h5>
                      <form>


                        {{-- Nombre --}}

                        <div class="form-group text-left">
                          <label for="exampleInputEmail1">NOMBRE</label>
                          <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del producto">
                        </div>


                        {{-- Precio y Alergenos --}}
                        
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6 text-left">
                            <label for="exampleInputPassword1">PRECIO PRODUCTO</label>
                              <div class="input-group">
                                <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                <div class="input-group-append">
                                  <span class="input-group-text">€</span>
                                </div>
                              </div>
                          </div>
                          <div class="col-6 text-left">
                            <label for="exampleInputPassword1">ALERGENOS</label>
                              <div class="input-group">
                                <section class="ftco-section">
                                  <div class="container">
                                    <div class="row justify-content-center">
                                      <div class="col-md-7 text-center mb-5">
                                      </div>
                                    </div>
                                    <div class="row justify-content-center">
                                      <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                        <select class="js-select2" multiple="multiple">
                                          <option value="O1" data-badge="">Option1</option>
                                          <option value="O2" data-badge="">Option2</option>
                                          <option value="O3" data-badge="">Option3</option>
                                          <option value="O4" data-badge="">Option4</option>
                                          <option value="O5" data-badge="">Option5</option>
                                          <option value="O6" data-badge="">Option6</option>
                                          <option value="O7" data-badge="">Option7</option>
                                          <option value="O8" data-badge="">Option8</option>
                                          <option value="O9" data-badge="">Option9</option>
                                          <option value="O10" data-badge="">Option10</option>
                                          <option value="O11" data-badge="">Option11</option>
                                          <option value="O12" data-badge="">Option12</option>
                                          <option value="O13" data-badge="">Option13</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </section>
                              </div>
                          </div>
                        </div>
                      </div>


                      {{-- Imagen --}}

                      <div class="form-group text-left">
                        <label for="exampleInputPassword1">IMAGEN</label>
                        <div class="container d-flex justify-content-center">
                          <div class="row">
                            
                          <div class="col-md-12">
                            <div class="file-drop-area">
                              <div class="row">
                                <div class="col-sm-12">
                                  <img class="img-upload" src="/imagenes/imagenes/cloud-computing.png"></img>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <span class="file-message">Arrastre y suelte un archivo aquí</span>
                                  <span class="choose-file-button">o haga click aquí </span>
                                  <input class="file-input" type="file" multiple>
                                </div>
                              </div>
                            </div>       
                          </div>      
                        </div>   
                      </div>
                      <div class="row">
                        <button type="button" id="btn-aceptar-cerrarSesion-listPrecios" class="btn btn-primary-modificar col-md-6" data-dismiss="modal">MODIFICAR</button>
                      </div> 
                    </div>
                  </div>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CERRAR SESIÓN</h5>
          <button type="button" id="btn_cerrar" class="close" data-dismiss="modal" aria-label="Close">
          <img src="imagenes/imagenes/close.png" alt="Editar" height="26" width="26">
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button" id="btn-aceptar-cerrarSesion-listPrecios" class="btn btn-primary-logout col-md-6" data-dismiss="modal">CANCELAR</button>

          <button type="button" id="btn-cancelar-cerrarSesion-listPrecios" class="btn btn-primary-logout col-md-6">
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

                <form action="{{ route('listaprecios.destroy', $establecimientoProducto) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Delete" height="20" width="20"></button>
                </form>                
            </td>
        </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay establecimientoProductos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection