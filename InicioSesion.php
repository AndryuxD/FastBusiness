<?php

require('conexion.php');
include("Filtro.php");

$email=$_POST['email'];
$pass=$_POST['password'];


if (Filtro::filtrar($email) || Filtro::filtrar($pass)){
    echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="Login.php" </script>';
}else{
    $ConsultaSesion= "SELECT * FROM tblusuario WHERE vch_email='$email' AND vch_password='$pass'";
    $ResultadoSesion= mysqli_query($Conexion,$ConsultaSesion);
    
    $num_filas = $ResultadoSesion->num_rows;
    
    if ($num_filas>0){
        $RowSesion=mysqli_fetch_array($ResultadoSesion);
        $IDSesion=$RowSesion['clv_usuario'];
        session_start();
        $_SESSION['Usuario']= $IDSesion; 
        echo '<script type="text/javascript"> alert("Has iniciado sesion correctamente"); window.location.href="index.php" </script>';
    }else{
        //echo 'Datos malos papaaa';
        echo '<script type="text/javascript"> alert("Los datos introducidos son incorrectos"); window.location.href="Login.php" </script>';
    }
}
?>