<?php 
    require('conexion.php');
    
    /* establecer el limitador de caché a 'private' */
    session_cache_limiter('private');
    $cache_limiter = session_cache_limiter();
    
    /* establecer la caducidad de la caché a 10 minutos */
    session_cache_expire(10);
    $cache_expire = session_cache_expire();
    
    /* iniciar la sesión */
    session_start();
    if (empty($_SESSION['Usuario'])) {
        include('PublicHeader.php');
    }else{
        /*$clv_trabajador=$_SESSION['Usuario'];

        $consultaTrabajador = " CALL sp_SelectSession($clv_trabajador)";
        $resultado=mysqli_query($Conexion, $consultaTrabajador);

        $num_filas = $resultado->num_rows;
        if ($num_filas==0)
            header("Location: ../login.html");

        $row=mysqli_fetch_array($resultado);
        mysqli_free_result($resultado);
        mysqli_close($Conexion);*/
        include('Header.php');
    }
    //require('../conexion.php');*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Bethany Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.2.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="Inversionistas.php">INVERCIONISTAS</a></li>
            <li>Detalles</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up" data-aos-delay="100">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/portfolio/RodrigoA.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/RodrigoB.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/RodrigoC.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Informacion</h3>
            <ul>
              <li><strong>Invercionista</strong>: Rodrigo Herrera</li>
              <li><strong>Registro</strong>: 01 March, 2020</li>
              <li><strong>Telefono</strong>: <a href="#">7721439987</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Rodrigo Herrera</h2>
          <p>
            En 1996 fundó la empresa Genomma Lab, la cual está orientada a productos de cuidado personal y salud en México,2​ aunque posteriormente la empresa se abrió a otros como Brasil, Argentina y Colombia.3​ En el 2008 la empresa comenzó a cotizar en la Bolsa Mexicana de Valores. Desde el 2010 es consejero independiente de Grupo Financiero Multiva.Ese mismo año fue premiado como Entrepreneur Of The Year por Ernst & Young México.​
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>FAST BUSINESS</h3>
        <p>
          Huejutla de Reyes Hidalgo <br> <br><br>
          <strong>Phone:</strong> +55 7717293115<br>
          <strong>Email:</strong> Fast_business@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Menu</h4>
        <ul>
        <li><i class="bx bx-chevron-right"></i> <a href="index.php">INICIO</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="AboutUs.php">NOSOTROS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Inversionistas.php">INVERSIONISTAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login.php">INICIAR SESION</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="SignIn.php">REGISTRARSE</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4></h4>
        <ul>
          
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Dudas</h4>
        <p>INTRODUZCA UNA PREGUNTA</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="enviar">
        </form>
      </div>

    </div>
  </div>
</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>