<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.0/font/css/open-iconic-bootstrap.css" integrity="sha256-CNwnGWPO03a1kOlAsGaH5g8P3dFaqFqqGFV/1nkX5OU=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                 @if ( Auth::user()->rol == 'ADMINISTRADOR')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/usuarios') }}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/categorias') }}">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/alergenos') }}">Alergenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cartas') }}">Cartas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/mesas') }}">Mesas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/establecimientos') }}">Establecimientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pedidos') }}">Pedidos</a>
                </li>
                @elseif (Auth::user()->rol == 'GERENTE')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/listaprecios') }}">Lista de Precios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#') }}">Añadir Producto</a>    
                </li>
                @elseif ( Auth::user()->rol == 'CAMARERO')
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pedidos') }}">Pedidos</a>
                </li>
                
                @endif
            </ul>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="container">
    <div class="row mt-3">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</main>

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

<footer class="footer">
    <div class="container">
        <img src="/imagenes/imagenes/logo_entero_blanco.svg" class="logo-blanco" alt="Logo"/>
        <span class="text-muted">Si tiene algún tipo de problema técnico, no dude en llamar al <strong>955 85 74 92</strong> le atenderemos enseguida</span>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js"></script>
<script>
    $('#from').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd/mm/yyyy'
    });
    $('#to').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd/mm/yyyy'
    });
</script>
</body>
</html>