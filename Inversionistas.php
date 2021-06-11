<?php 
    require('conexion.php');
    
    /* establecer el limitador de caché a 'private' */
    session_cache_limiter('private');
    $cache_limiter = session_cache_limiter();
    
    /* establecer la caducidad de la caché a 10 minutos */
    session_cache_expire(10);
    $cache_expire = session_cache_expire();
    
    /* iniciar la sesión */
   
    //require('../conexion.php');*/
?>
<!DOCTYPE html>
<html lang="en">
    
    

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FAST BUSINESS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  

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
</head>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>FAST BUSINESS</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php">INICIO</a></li>
            <li><a href="AboutUs.php">NOSOTROS</a></li>
            <li><a href="Inversionistas.php">INVERSIONISTAS</a></li>
             <li><a href="mapa.php">Mapa Del Sitio</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
            <li><a href="seleccion.php">INICIAR SESION</a></li>
            <li><a href="TipoDeUsuario.php">REGISTRARSE</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
<body>

<body>

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
       <br>
       <br>
       <br>
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>INVERSIONISTAS</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/ArturoE.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Arturo Elias</h4>
                <p>Arturo Elias</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/ArturoE.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                  <a href="Arturo.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/CarlosB.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Carlos Bremer</h4>
                <p>Carlos Bremer</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/CarlosB.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                  <a href="Carlos.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/RodrigoA.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rodrigo Herrera</h4>
                <p>Rodrigo Herrera</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/RodrigoA.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                  <a href="Rodrigo.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->



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