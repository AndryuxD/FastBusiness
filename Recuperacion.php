<?php
    if (!empty($_POST['pass'])){
        require ('conexion.php');
        include("Filtro.php");
        $pass = $_POST['pass'];
        $email = $_POST['email'];

        if (Filtro::filtrar($email) || Filtro::filtrar($pass)){
            echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); 
            window.location.href="NewPassword.php" </script>';
        }else{
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
        }
    }

?>