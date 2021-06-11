<?php  
    require('conexion.php');
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
    <title>Error</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <header id="Header uwu">
    </header>

    <br>
    <br>
    <br>
    <br>
    
    <center>
        
    <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                
                
            </div>
        </div>
        <div class="cuadrado">
            <h1>OOPS!</h1>
                <h2>ERROR 400</h2>
                <h2>PETICION MALA (BAD REQUEST)</h2>
                <img src="Imagenes/400.png" width="250px" height="250px" alt="">
                <h2>LAMENTAMOS LAS MOLESTIAS </h2>
                <h2>PARA CONTINUAR REGRESE AL INICIO</h2>
        </div>
        <style>
        .cuadrado{
            padding:5px;
            margin:5px;
            background-color: #C67519;
            border: solid 1px red;
            color: white;
            }
        </style>
    </center>

<br>
    
    <script type="text/javascript" src="css/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="css/popper.min.js"></script>
    <script type="text/javascript" src="css/bootstrap.min.js"></script>


</body>
</html>