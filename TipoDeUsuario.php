<?php 
    require('conexion.php');
    
    /* establecer el limitador de caché a 'private' */
    session_cache_limiter('private');
    $cache_limiter = session_cache_limiter();
    
    /* establecer la caducidad de la caché a 10 minutos */
    session_cache_expire(10);
    $cache_expire = session_cache_expire();
    
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
<body style="background-image: url(Imagenes/F_sesion_inicio.jpg);background-size:100% 100%;">
     
<br><br><br>
    <div align="center">
        <img src="Imagenes/Inversionista.png" class="rounded left" style="padding: 60px;">
        <img src="Imagenes/emprendedor.png" class="rounded right" alt="" style="padding: 60px;">
    </div>
    <div align="center">
        <a href="Sinln2.php"  class="btn btn-outline-success" style="margin-right:100px;width:180px;">Inversionista</a>
        <a href="SignIn.php"  class="btn btn-outline-success" style="margin-left:150px;width:180px;">Emprendedor</a>
    </div>
</body>
</html>