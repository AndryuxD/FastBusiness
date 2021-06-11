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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: rgb(119, 123, 124);">
<header id="Header uwu">
    </header>
    <br><br><br><br><br>
    <div class="container-fluid">
        <div align="center">
            <div class="col-lg-3 col-md-12 col-sm-12" style="margin-top: 10px;">
                <div class="card border-success mb-3" style="max-width: 25rem;">
                    <div class="card-header" align="center">
                        <img src="Imagenes/Login.jpg" width="100px" height="100px" alt="">
                        <h1>Iniciar sesion</h1>
                    </div>
                    <div class="card-body">
                        
                        <form action="InicioSesion.php" method="post" >

                            <input type="email" name="email" class="form-control" placeholder="E-mail" autocomplete="off" required><br>
                            <input type="password" minlength="1" maxlength="64" name="password" class="form-control" placeholder="Password" required><br><br>
                            <input type="submit" value="Entrar" class="btn btn-outline-success btn-block"><br>
                            <a href="Tipo_Recuperacion.php" >Forgot password?</a><br>
                              
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

</body>
</html>