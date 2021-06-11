<?php
    require('conexion.php');
    
    if (isset($_GET['email'])){
        $email=$_GET['email'];
        echo    '<script type="text/javascript">
                    alert("El e-mail '.$email.' ya se encuentra en uso");
                    window.location.href="Sinln2.php"
                </script>';
    }
    if (isset($_GET['empresa'])){
        $empresa=$_GET['empresa'];
        echo    '<script type="text/javascript">
                    alert("El nombre de la empresa '.$empresa.' ya se encuentra en uso");
                    window.location.href="Sinln2.php"
                </script>';
    }
    
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignIn2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: rgb(119, 123, 124);">
    <header id="Header uwu">
    </header>
    <br><br><br><br><br>
    
    <div class="container-fluid">
        <div align="center">
            <div class="col-lg-5 col-md-4 col-sm-12" style="margin-top: 40px;">
                <div class="card border-success mb1-3" style="max-width: 25rem;">
                    <div class="card-header" align="center">
                        <h4>Registro de Inversionista</h4>
                    </div>
                    <div class="card-body">
                        <form action="Registro_2.php" method="post" >

                            <input type="text" name="usuario" minlength="3" maxlength="50" class="form-control" placeholder="Nombre de usuario" autocomplete="off" required><br>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required><br>
                            <input type="text" name="RFC" minlength="12" maxlength="12" class="form-control" placeholder="RFC" required><br>
                            <input type="text" name="clabe" minlength="18" maxlength="18"  class="form-control" placeholder="CLABE interbancaria" required><br>
                            <input type="password" name="password" minlength="8" maxlength="60"  class="form-control" placeholder="Password" required><br>
                            <div class="form-group">
                             <label for=""><h7>Seleccione una opción</h7></label>
                            <select id="pregunta" name="pregunta" align="center" class="form-control">
                                <option>¿Nombre de tu perro?</option>
                                <option>¿Libro favorito?</option>
                                <option>¿Cancion favorito?</option>
                                <option>¿Mes de tu cumpleaños?</option>
                                <option>¿Lugar de naciento?</option>
                            </select>
                            <br>
                            <input type="text" name="respuesta" id="respuesta" class="form-control" placeholder="Ingrese Su Respuesta" minlength="5" maxlength="20" required>    
                            </div>
                            <input type="checkbox" value="Si" name="Check" required> Acepto los terminos y condiciones del <a href="Aviso.pdf">Aviso de privacidad</a>
                            <br><br>
                            <input type="submit" value="Registrarme!" class="btn btn-outline-success btn-block">  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <br>  

</body>
</html>