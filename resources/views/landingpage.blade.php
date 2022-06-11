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
          <img src="img/logo_pequeño.png" height="50" alt="Sit&Scan Logo" loading="lazy" />
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
              <a class="nav-link active" aria-current="page" href="#inicio">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#titulo1">Título 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#titulo2">Título 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#titulo3">Título 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#titulo4">Título 4</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#footer">Footer</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-md">
      <div class="row">
        <div id="parrafo1" class="col-6">
          <h1>¿QUÉ ES <img src="img/logo_entero.png" height="65" alt="Sit&Scan Logo" loading="lazy" />?</h1>
          <p> Es una aplicación orientada a la hosteleria que consiste en escanear un código QR en el que <strong>podrás pedir a través de Sit&Scan.</strong></p>
        </div>
      </div>

    </div>

  </header>

  <!--Main Navigation-->

  <div id="titulo1" class="container my-5">
    <div class="row justify-content-around">
      <h2>¿CÓMO AÑADIR UN PRODUCTO AL PEDIDO?</h2>
      <div class="col-12 col-lg-6">
        <div class="bg-image" style="background-image: url('img/logo_pequeño.png');
            height: 50vh">
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <h4> ¡Super Fácil!</h4>
        <p>Después de escanear el QR, aparecerá el menú principal donde tendremos acceso a las diferentes categorías que proporciona el establecimiento.</p>
        <p>Una vez seleccionado la categoría nos aparecerá un listado de productos en el que tendremos la opción de elegir uno de ellos.</p>
        <p>Añade la cantidad y pulsa <b>ACEPTAR</b></p>
        <p><strong>¡Listo tu producto ha sido añadido al pedido!</strong></p>
      </div>
    </div>
  </div>

  <div id="color" class="container-fluid py-5">
    <div id="titulo2" class="container-md">
      <div class="row justify-content-around">
        <h2>¿CÓMO REALIZAR UN PEDIDO?</h2>
        <div class="col-12 col-lg-6">
          <p> Una vez tengas añadidos todos los productos que desees pulsa <b>FINALIZAR</b>.</p>
          <p><strong>Pronto llegará tu pedido y será cobrado.</strong></p>
        </div>
        <div class="col-12 col-lg-6">
          <div class="bg-image" style="background-image: url('img/logo_pequeño.png');
              height: 50vh">
          </div>

        </div>
      </div>
    </div>

  </div>

  <div id="titulo3" class="container my-5">
    <div class="row justify-content-around">
      <h2>¿ERES UN FIESTERO?</h2>
      <div class="col-12 col-lg-6">
        <div class="bg-image" style="background-image: url('img/logo_pequeño.png');
            height: 50vh">
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <h4> ¡Otra Ronda!</h4>
        <p> Nuestra aplicación consta de un botón que te permite acceder a tu último pedido sin necesidad de volver a añadir los productos de una manera fácil y rápida.</p>
      </div>
    </div>
  </div>

  <div id="color-naranja" class="container-fluid py-5">
    <div id="titulo4" class="container-md">
      <div class="row">
        <div id="centrado" class="col-12 pb-5">
          <h2>¡DESCARGA LA APP!</h2>
        </div>
        <div class="col-12 pt-5">
          <div class="bg-image" style="background-image: url('img/logo_pequeño.png');
              height: 50vh">
          </div>

        </div>
      </div>
    </div>

  </div>


  <footer id="footer">
    <div class="container-md py-5">
      <div class="row">
        <div class="col-12 col-md-4">
          <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
          <a class="nav-link active" aria-current="page" href="#"></a>
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </div>
        <div class="col-12 col-md-4">
          <p>
            <img src="img/logo_pequeño.png" height="25" alt="Sit&Scan Logo" loading="lazy" />
            luciaserranovargas@gmail.com
          </p>
          <p> <img src="img/logo_pequeño.png" height="25" alt="Sit&Scan Logo" loading="lazy" />
            josemiguelfernandezmarin@gmail.com</p>
          <p> <img src="img/logo_pequeño.png" height="25" alt="Sit&Scan Logo" loading="lazy" />
            robertonavarrosanchez@gmail.com</p>
          <p> <img src="img/logo_pequeño.png" height="25" alt="Sit&Scan Logo" loading="lazy" />
            franciscoismael7.7.2000@gmail.com</p>
        </div>
      </div>
      <div class="row justify-content-between mt-5">
        <div class="col-4">
          <img src="img/logo_pequeño.png" height="50" alt="Sit&Scan Logo" loading="lazy" />
        </div>
        <div class="col-4">
          <h2><strong>SIT&SCAN</strong></h2>
        </div>
      </div>
    </div>
  </footer>


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>