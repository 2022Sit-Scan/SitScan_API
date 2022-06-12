<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sit&Scan</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
  <!--Main Navigation-->
  <header id="inicio">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Container wrapper -->
      <div class="container-md pt-5">
        <a class="navbar-brand" href="#">
          <img src="{{asset('img/logo_pequeño.png')}}" height="50" alt="Sit&Scan Logo" loading="lazy" />
        </a>
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarRightAlignExample">
          <!-- Left links -->
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#inicio">INICIO</a>
            </li>
            <li class="nav-item">
              <a id="texto-resaltado" class="nav-link active" aria-current="page" href="#qr">CÓDIGO QR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#producto">PRODUCTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#pedido">PEDIDO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#otra-onda">OTRA RONDA</a>
            </li>
            <li class="nav-item descarga">
              <a class="nav-link active" aria-current="page" href="#descarga">DESCARGAR APP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-md">
      <div class="row">
        <div id="sitScan" class="col-6">
          <h1>¿QUÉ ES <img src="{{asset('img/logo_entero.png')}}" height="65" alt="Sit&Scan Logo" loading="lazy" />?</h1>
          <p> <b>SIT&SCAN</b> es una aplicación orientada a la hosteleria que contiene la carta del establecimiento con todos los productos del mismo y un sistema de pedido.</p>
          <p>Los clientes deberán escanear el código QR de la mesa en la que estén para <strong>poder pedir lo que deseen sin tener que esperar a que venga a atenderlos.</strong></p>
          <p><strong>¡Siéntate , pruébalo y disfruta!</strong></p>
        </div>
      </div>

    </div>

  </header>

  <!--Main Navigation-->

  <div id="qr" class="container-fluid py-5">
    <img src="{{asset('img/qr_img.png')}}" class="img-fluid hover-shadow" alt="QR ELVIRIS" />
    <h2>DESCARGA SIT&SCAN </h2>
    <h2>Y</h2>
    <h2>ESCANEAME</h2>
  </div>

  <div id="producto" class="container my-5">
    <div class="row justify-content-around">
      <h2>¿CÓMO AÑADIR UN PRODUCTO AL PEDIDO?</h2>
      <div class="col-12 col-lg-6 me-2">
        <div class="bg-image" style="background-image: url('{{asset('img/producto.png')}}');
            height: 50vh">
        </div>
      </div>
      <div class="col-12 col-lg-5 ms-5">
        <h4> ¡<strong>S</strong>uper Fácil <strong>& S</strong>encillo !</h4>
        <p>Después de escanear el QR, aparecerá el menú principal donde tendremos acceso a las diferentes categorías que proporciona el establecimiento.</p>
        <p>Una vez seleccionado la categoría nos aparecerá un listado de productos en el que tendremos la opción de elegir uno de ellos.</p>
        <p>Añade la cantidad y pulsa <b>ACEPTAR</b>.</p>
        <p><strong>¡Listo! Tu producto ha sido añadido a la lista del pedido.</strong></p>
      </div>
    </div>
  </div>

  <div id="color" class="container-fluid py-5">
    <div id="pedido" class="container-md">
      <div class="row justify-content-around">
        <h2>¿CÓMO REALIZAR UN PEDIDO?</h2>
        <div class="col-12 col-lg-6">
          <p> Una vez tengas añadidos todos los productos que desees pulsa <b>FINALIZAR</b> en la pantalla de pedido.</p>
          <p><strong>Pronto llegará tu pedido y será cobrado.</strong></p>
          <p>Además esta pantalla te proporciona borrar de tu lista de productos, los productos que no quieras pedir o incluso cambiar la cantidad.</p>

        </div>
        <div class="col-12 col-lg-6">
          <div class="bg-image" style="background-image: url('{{asset('img/pedido.png')}}');
              height: 70vh">
          </div>

        </div>
      </div>
    </div>

  </div>

  <div id="otra-ronda" class="container my-5">
    <div class="row justify-content-around">
      <h2>¿ERES UN@ FIESTER@?</h2>
      <div class="col-12 col-lg-6">
        <div class="bg-image" style="background-image: url('{{asset('img/otra-ronda.png')}}');
            height: 70vh">
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <h4> Otra Ronda, ¡será para ti!</h4>
        <p> Nuestra aplicación consta de un botón que te permite acceder de forma fácil y rápido a tu último pedido sin necesidad de volver a añadir los productos. </p>
        <p><strong>¿Quieres otra? ¡Pídela!</strong></>
        <p></p>
      </div>
    </div>
  </div>

  <div id="image" class="container-fluid py-5">
    <div id="descarga" class="container-md">
    </div>
  </div>

  </div>


  <footer id="footer">
    <div class="container-md py-5">
      <div class="row">
        <div class="col-12 col-md-4">
          <a class="nav-link active" aria-current="page" href="#inicio">INICIO</a>
          <a id="texto-resaltado" class="nav-link active" aria-current="page" href="#qr">CÓDIGO QR</a>
          <a class="nav-link active" aria-current="page" href="#producto">PRODUCTO</a>
          <a class="nav-link active" aria-current="page" href="#pedido">PEDIDO</a>
          <a class="nav-link active" aria-current="page" href="#otra-ronda">OTRA RONDA</a>
        </div>
        <div class="col-12 col-md-4">
        </div>
        <div class="col-12 col-md-4">
          <p>
            <i class="far fa-envelope fa-lg"></i>
            luciaserranovargas@gmail.com
          </p>
          <p>
            <i class="far fa-envelope fa-lg"></i>
            josemiguelfernandezmarin@gmail.com
          </p>
          <p> <i class="far fa-envelope fa-lg"></i>
            robertonavarrosanchez@gmail.com</p>
          <p> <i class="far fa-envelope fa-lg"></i>
            franciscoismael7.7.2000@gmail.com</p>
        </div>
      </div>
      <div class="row justify-content-between mt-5">
        <div class="col-4">
          <img src="{{asset('img/logo_pequeño.png')}}" height="50" alt="Sit&Scan Logo" loading="lazy" />
        </div>
        <div class="col-4">
          <h2>SIT<strong>&</strong>SCAN</h2>
        </div>
      </div>
    </div>
  </footer>


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>