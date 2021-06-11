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


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <center>
            <br>
            <br>
            <br>
            <h1>¡Nosotros!</h1>
            <img src="Imagenes/sinfondo.png" width="300px" height="300px" alt="">
            
        </center>
      
    </div>
  </section><!-- End Hero -->     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container">

        <div  class="text-center" data-aos="zoom-in">
          <h3 align="left">MISIÓN: </h3>
          <p align="left"> La misión de FAST BUSSINES es ser un medio para el desarrollo integral y transformacional a </p>
          <p align="left">través de la formación y el emprendimiento, facilitando una plataforma que permita actuar como  </p>
          <p align="left"> un intermediario para el financiamiento de proyectos emprendedores, a través de patrocinadores </p>
          <p align="left"> que deseen apoyar; brindando una alternativa para que los jóvenes puedan promocionar sus  </p>
          <p align="left"> proyectos y así poder obtener financiamiento. Contribuyendo al desarrollo de nuestro país, </p>
          <p align="left"> generando cambios en la sociedad.</p>
          <p align="left"> </p>
          <br>
          <h3 align="left">VISIÓN:</h3>
          <p align="left"> Ofrecemos un servicio a la medida de las necesidades de nuestros usuarios manteniendo la </p>
          <p align="left"> máxima calidad de servicio con la eficiencia, la responsabilidad y seguridad que necesitan, </p>
          <p align="left"> </p>

          <h3 align="left">VALORES:</h3>
          <p align="left"> 1. Honestidad</p>
          <p align="left"> Esto tiene que ver con usar la verdad como herramienta para ganarse la confianza y credibilidad </p>
          <p align="left"> frente al entorno.</p>
          <p align="left"> 2. Responsabilidad social </p>
          <p align="left"> Crear un impacto amplio y positivo en la sociedad que los rodea, los negocios deben darle fuerza </p>
          <p align="left">al valor de la Responsabilidad Social </p>
          <p align="left"> 3. Competitividad</p>
          <p align="left"> La empresa solo puede ser la mejor solo si se exige lo mejor. Cuando esto sucede, la moral, la  </p>
          <p align="left"> pasión y la motivación nunca faltarán y el crecimiento de la organización es una consecuencia  </p>
          <p align="left"> natural.</p>
          <p align="left"> 4. Trabajo en equipo  </p>
          <p align="left"> La gestión de equipos de trabajo surge como una necesidad importante en ambientes  </p>
          <p align="left"> corporativos donde la tolerancia, respeto, la admiración y la consideración son las prioridades. </p>
          <p align="left"> 5. Responsabilidad social </p>
          <p align="left"> Para causar un impacto amplio y positivo en la sociedad que los rodea, los negocios deben darle </p>
          <p align="left"> fuerza al valor de la Responsabilidad Social. </p>
          <p align="left"> 6. Pasión:</p>
          <p align="left"> Tener la pasión como valor de una empresa, servirá para crear y mantener la emocionalidad al  </p>
          <p align="left"> tope y transmitir esa motivación al exterior. </p>
          <p align="left"> </p>
          <p align="left"> </p>
          <p align="left"> </p>
          <p align="left"> </p>
          <p align="left"> </p>
          <p align="left"> </p>
          <p align="left"> </p>
          <p align="left"> </p>
          <p align="left"> </p>
        </div>

      </div>
    </section><!-- End Cta Section -->


  <!-- ======= Footer ======= -->




 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <center>
             
            <br>
            <h1>AVISO DE PRIVACIDAD</h1>
            <img src="Imagenes/sinfondo.png" width="300px" height="300px" alt="">
            
        </center>
      
    </div>
  </section><!-- End Hero -->
   <!-- ======= Cta Section ======= -->
   <section id="cta" class="cta">
      <div class="container">

        <div  class="text-center" data-aos="zoom-in">
          <h3 align="left">AVISO DE PRIVACIDAD</h3>

          <h3 align="left">1.Nombre </h3>
          <p align="left">FAST BUSINESS</p>

          <h3 align="left">2.DOMICILIO</h3>
          <p align="left">Conocido Chalahuiyapa,hgo,carretera Huejutla-Chalahuiyapa.</p>

          <h3 align="left">3.RESPONSABILIDAD</h3>
          <p align="left">En cumplimiento de la LFPDPPP (Ley Federal de Protección de Datos Personales en Posesión de los Particulares), SHARK SEA, se compromete a mantener sus datos personales bajo protección, impidiendo que sean usados para fines distintos a los establecidos por la empresa.</p>

          <h3 align="left">4.USO Y FIN </h3>
          <p align="left">Para que nuestro sitio web y nuestros servicios estén
               disponibles para usted, o para cumplir con una obligación legal,
                necesitamos recopilar y utilizar cierta información personal. 
                Si no proporciona la información que le solicitamos, es posible
                que no podamos brindarle servicios solicitados. Parte de la información
                que recopilamos proviene directamente de usted a través de nuestro sitio
                web. Cualquier información que recopilemos de usted se puede utilizar para los siguientes propósitos:</p>
            <p align="left">· Crear y administrar cuentas de usuario· </p>
            <p align="left">· Enviar información administrativa</p>
            <p align="left">· Enviar comunicaciones de marketing y promocionales </p>
            <p align="left">· Responder consultas y ofrecer apoyo</p>
            <p align="left">· Solicitar comentarios de los usuarios</p>
            <p align="left">· Mejorar la experiencia del usuario</p>
            <p align="left">· Publica testimonios de clientes</p>
            <p align="left">· Entregar publicidad dirigida </p>
            <p align="left">· Hacer cumplir los términos y condiciones y políticas</p>
            <p align="left">· Proteger de abusos y usuarios malintencionados</p>
            <p align="left">· Responder a solicitudes legales y prevenir daños</p>
            <p align="left">· Ejecutar y operar nuestro sitio web. </p>
            <p align="left">El procesamiento de su información personal depende de cómo 
                interactúa con nuestro sitio web, dónde se encuentra en el mundo y si se 
                aplica una de las siguientes situaciones: (i) ha dado su consentimiento 
                para uno o más fines específicos; esto, sin embargo, no se aplica, siempre 
                que el procesamiento de información personal esté sujeto a la Ley de Privacidad 
                del Consumidor de México o la ley de protección de datos; (ii) la provisión de 
                información es necesaria para la ejecución de un acuerdo con usted y / o para 
                cualquier obligación precontractual del mismo; (iii) el procesamiento es necesario 
                para el cumplimiento de una obligación legal a la que está sujeto; (iv) el 
                procesamiento está relacionado con una tarea que se lleva a cabo en el interés 
                público o en el ejercicio de la autoridad oficial conferida a nosotros; (v) el 
                procesamiento es necesario para los fines de los intereses legítimos perseguidos por nosotros o por un tercero. </p>
            <p align="left">Tenga en cuenta que, según algunas legislaciones, es posible que se nos permita procesar información hasta
                 que usted se oponga a dicho procesamiento (al optar por no participar), sin tener que depender del consentimiento o de 
                 cualquier otra de las siguientes bases legales a continuación. En cualquier caso, estaremos encantados de aclarar la base 
                 legal específica que se aplica al procesamiento y, en particular, si el suministro de Información personal es un requisito 
                 legal o contractual, o un requisito necesario para celebrar un contrato.</p>
            <h3 align="left"> 5. DATOS PERSONALES</h3>
            <p align="left"> Los datos personales que serán usados en la empresa son:</p>
            <p align="left"> •	Nombre </p>
            <p align="left"> •	Apellidos</p>
            <p align="left"> •	Teléfono </p>
            <p align="left"> •	Correo </p>
            <p align="left"> •	Domicilio </p>
            <p align="left"> •	CURP </p>
            <h3 align="left">6.   ARCO</h3>
            <p align="left">Acceso: Conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones de su uso.</p>
            <p align="left">Rectificación: Solicitar la corrección de su información personal en caso de que 
                esté desactualizada, sea inexacta o incompleta, proporcionando evidencia de la información correcta.</p>
            <p align="left"> Cancelación: Que sus datos sean eliminados de nuestros registros o bases de datos cuando 
                considere que no están siendo usados conforme a la normatividad aplicable</p>
            <p align="left"> Oposición: Manifestar su oposición al uso de sus datos personales 
                para algún fin específico. Asimismo, usted tiene derecho a revocar su consentimiento
                para el tratamiento de sus datos personales. </p>
            <h3 align="left">7.Datos de contacto </h3>
            <p align="left"> DOMICILIO:Carretera. Huejutla- chalahuiyapa s/n.Col tepoxtengo.43000 hgo. </p>
            <p align="left"> Teléfono: 7717293115</p>
            <p align="left"> Correo electrónico: fast_busniess@.fastbusniess.mx</p>
            <p align="left"> Pagina web :https://www.fast_busniess.com </p>
            <h3 align="left"> 8. Transferencia de información</h3>
            <p align="left"> Se le informa que no se realizarán transferencias de datos personales, 
                salvo aquéllas que sean necesarias para atender los requerimientos de información de una 
                autoridad competente, que estén debidamente fundados y motivados.</p>
            <h3 align="left">9.  No autorización de transferencia. </h3>
            <p align="left"> Fast Business está obligada a no transferir 
                ni divulgar, los datos personales del usuario, solo se 
                realizará transferencia de sus datos en los casos en los que 
                ellos mismos así lo requieran. Cabe recalcar que en caso de que 
                resulte necesario se hará cumplimiento a disposiciones legales 
                para cumplir los fines del tratamiento establecido en el presente 
                aviso de privacidad, por lo que se adoptará e implementará todos los 
                procedimientos y medidas necesarios para impedir el uso o revelación 
                no autorizada de los datos personales del usuario.</p>
            <h3 align="left"> 10.autorización de promoción o comunicación </h3>
            <p align="left"> Si usted desea dejar de recibir notificaciones o 
                promociones a su correo contáctenos  al siguiente correo   fast_busniess@.fastbusniess.mx  </p>
            <h3 align="left">11. Domicilio de consulta:</h3>
            <p align="left">En caso de modificaciones al presente Aviso de Privacidad. Estas modificaciones 
                estarán disponibles al público a través del siguiente medio electrónico: se encontrará 
                disponible en nuestra página de Internet https://www.fast_busniess.com en el apartado de 
                privacidad, así mismo se les notificará mediante el envío de un correo electrónico que nos hayan proporcionado.</p>
            <h3 align="left">12.Mención de actualización</h3>
            <p align="left">Última actualización 03/10/2020 </p>
        </div>

      </div>
    </section><!-- End Cta Section -->


  <!-- ======= Footer ======= -->
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