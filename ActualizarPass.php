<?php
    require ('conexion.php');
    include("Filtro.php");

        $email = $_POST['email'];
        $pass = $_POST['contrasena'];

        $query = "UPDATE tblusuario SET vch_password='$pass' WHERE vch_email='$email'";
        $response = mysqli_query($Conexion,$query);
        if ($response){
            echo    '<script type="text/javascript">
                alert("Se ha cambiado tu password exitosamente");
                window.location.href="Login.php" </script>';
        }else{
            echo    '<script type="text/javascript">
                alert("Se ha producido un error, intenta de nuevo");
                window.location.href="Login.php" </script>';
        }
    
    //include_once 'FrmRegistro.php';
?>

 