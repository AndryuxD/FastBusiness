<?php 
    require('conexion.php');
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
        header("Location: Error.php");
        include('Header.php');
    }
    //require('../conexion.php');*/
    echo '<script>
            alert("Te enviaremos un E-mail para reestablecer el password, por favor introduce tu E-mail");
        </script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <header id="Header uwu">
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container-fluid">
        <div align="center">
            <div class="col-lg-3 col-md-12 col-sm-12" style="margin-top: 10px;">
                <div class="card border-success mb-3" style="max-width: 25rem;">
                    <div class="card-header" align="center">
                        <img src="Imagenes/Login.jpg" width="100px" height="100px" alt="">
                        <h1>Recuperar password</h1>
                    </div>
                    <div class="card-body">
                        
                        <form action="ForgotMail.php" method="post" >

                            <input type="email" name="email" class="form-control" placeholder="E-mail" autocomplete="off" required><br><br>
                            <input type="submit" value="Enviar E-mail" name="enviar" class="btn btn-outline-success btn-block"><br>
                              
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

</body>
</html>