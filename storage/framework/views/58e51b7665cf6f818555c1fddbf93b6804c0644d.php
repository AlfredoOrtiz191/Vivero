<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Proyecto Vivero</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<style>
#Carrito{
	color: black;
	border: 2px solid rgb(3, 60, 5);
}
#espacio{
	margin-bottom:30%;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/carrito.css')); ?>" rel="stylesheet">
  </head>
  <body >
    
<header>
  <nav class="container navbar navbar-expand-md navbar-dark fixed-top bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">VIVERO ORTIZ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/clientes/general">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/provedores/general">Provedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/usuarios/general">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/canasta">Carrito</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>


    <div class="container pt-5 pb-5" id="espacio">
      <?php echo $__env->yieldContent('s1'); ?>
    </div>
  



 
  
  <!-- FOOTER -->
  <footer class="container mt-5 text-center text-lg-start rounded alert alert-success text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Contactanos por redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-linkedin"></i>
      </a>
      
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i> Vivero Ortiz S.A de C.V.
          </h6>
          <p>
            Contamos con gran variedad de plantas, ademas ideamos tu jardin perfecto.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Plantas</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Abono</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Tierra</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Piedra decorativa</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Eventos
          </h6>
          <p>
            <a href="#!" class="text-reset">Rebajas por registrarte</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Salva una planta</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Descuentos por temporada</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Consejos</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contacto
          </h6>
          <p><i class="bi bi-geo-alt me-3"></i> AV. La Merced #360</p>
          <p>
            <i class="bi bi-envelope me-3"></i>
            viveroOrtiz@gmail.com
          </p>
          <p><i class="bi bi-phone me-3"></i> 477 448 10 54</p>
          <p><i class="bi bi-phone me-3"></i> 477 000 00 00</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 bg-success">
    
    <a class="text-white" href="/">© 2021 Copyright: bootstrap    Vivero Ortiz S.A de C.V.</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</main>
</main>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/canasta.blade.php ENDPATH**/ ?>