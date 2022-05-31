@extends('layout')

@section('title', 'Lista de Productos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Lista de productos</h1>
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
                <p><a href="#" class="btn btn-primary">Crear producto</a></p>
                
                <table class="table">
                    <thead class="thead">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                            <a href="{{ route('productos.show', $producto) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-link"><img src="imagenes/imagenes/icon_edit.svg" alt="Editar" height="30" width="30"></span></a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-link"><img src="imagenes/imagenes/icon_delete.svg" alt="Editar" height="26" width="26"></button>
                            </form>   
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
@endsection
