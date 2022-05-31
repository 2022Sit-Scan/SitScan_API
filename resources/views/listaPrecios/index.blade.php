@extends('layout')

@section('title', 'LISTA DE PRECIOS')

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
            <a href="{{ route('listaprecios.create') }}" class="btn btn-primary" id="addProducto"> + Añadir Producto</a>
        </p>
        
    </div>

    <div class="input-group">
      <div class="form-outline">
        <input id="search-focus" type="search" id="form1" class="form-control" />
        <label class="form-label" for="form1">Search</label>
      </div>
      <button type="button" class="btn btn-primary">
        <i class="fas fa-search"></i>
      </button>
    </div>

    @if ($establecimientoProductos != "")
    <table class="table">
        <thead class="thead">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">PRODUCTO</th>
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
            <td>{{ $establec->pivot->precio }}</td>
            <td>
                <a href="#ventana2" class="btn btn-link" data-toggle="modal"><img src="imagenes/imagenes/icon_edit.svg" alt="Editar" height="30" width="30"></a>
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
                    <button type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Editar" height="26" width="26"></button>
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

<script>
  const searchFocus = document.getElementById('search-focus');
  const keys = [
    { keyCode: 'AltLeft', isTriggered: false },
    { keyCode: 'ControlLeft', isTriggered: false },
  ];
  
  window.addEventListener('keydown', (e) => {
    keys.forEach((obj) => {
      if (obj.keyCode === e.code) {
        obj.isTriggered = true;
      }
    });
  
    const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;
  
    if (shortcutTriggered) {
      searchFocus.focus();
    }
  });
  
  window.addEventListener('keyup', (e) => {
    keys.forEach((obj) => {
      if (obj.keyCode === e.code) {
        obj.isTriggered = false;
      }
    });
  });
  
  </script>