<?php

require('conexion.php');
include("Filtro.php");

$id = $_GET['id'];
$usu = $_GET['name'];
$email = $_GET['email'];

$queryS = "SELECT * FROM tblusuario WHERE clv_usuario=$id";
$resultadoS = mysqli_query($Conexion, $queryS);
$rowS = $resultadoS->num_rows;
if ($rowS == 0) {
    if (Filtro::filtrar($usu) || Filtro::filtrar($email) || Filtro::filtrar($id)) {
        echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="Login.php" </script>';
    } else {
        $query = "INSERT INTO tblusuario(clv_usuario,vch_usuario,vch_email,vch_tipo_sesion) VALUES($id,'$usu','$email','FB')";
        $resultado = mysqli_query($Conexion, $query);
    }
}
$IDSesion = $id;
session_start();
$_SESSION['Usuario'] = $IDSesion;
echo    '<script type="text/javascript">
                    alert("Has iniciado sesion correctamente, seras redirigido a la pagina principal");
                    window.location.href="index.php"
                </script>';


/**/
