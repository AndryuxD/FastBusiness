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
        include('Header.php');
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Recuperacion</title>
</head>
<body style="background-color: rgb(185, 227, 219);">
    <header id="Header uwu"></header>
    <br><br><br>

    <form action="" method="">
        <div class="container">
            <div class="col-md-4 offset-md-4 col-sm-12" style="margin-top: 40px;">
                <div class="card border-success mb1-3" style="max-width: 40rem;">
                    <div class="card-header" align="center"  style="background-color: rgb(49, 49, 192);">
                        <h4 id="tituloAcceso" class="card-title text-success"><label for="" style="color: white;">Recuperar PSWD</label></h4>
                    </div>
                    <div class="card-body">
                        <div id="alerta">
                            <label for=""><h5>Seleciona una opcion</h5></label>
                        </div>
                        <div>
                            <a href="ForgotPassword.php"  class="btn btn-outline-success btn-block">VIA CORREO ELECTRONICO</a><br>
                        </div>
                        <div>
                            <a href="Acceder_usuario.php"  class="btn btn-outline-success btn-block">PREGUNTA SECRETA</a>
                        </div>    
                        <br>
                        <center>
                            <a type="submit" class="" href="index.php" style="color: rgb(22, 161, 22);">Volver Atras</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </form> 

    
</body>
</html>