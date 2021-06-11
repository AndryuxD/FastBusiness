<?php
    if (isset($_POST['enviar'])){
        if(!empty($_POST['email'])){
            require ('conexion.php');
            include("Filtro.php");

            $email = $_POST['email'];
            
            if (Filtro::filtrar($email)){
                echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); 
                window.location.href="ForgotPassword.php" </script>';
            }else{
                $query = "SELECT * FROM tblusuario WHERE vch_email='$email'";
                $response = mysqli_query($Conexion,$query);
                $row = mysqli_fetch_array($response);
                
                $id=md5($row['vch_password']);
                $header = "From: fastbusiness@info.com";
                $asunto = "Reestablecimiento de password";
                $msg = "Para reestablecer el password de click en el siguiente enlace 'https://fastbusiness.info/NewPassword.php?id=$id&email=$email'";
                $mail = mail($email,$asunto,$msg,$header);
                if ($mail){
                    echo    '<script type="text/javascript">
                        alert("Se ha enviado un enlace a tu correo, revisalo por favor");
                        window.location.href="Login.php" </script>';
                }else{
                    echo    '<script type="text/javascript">
                        alert("No se ha podido enviar el correo");
                        window.location.href="Login.php" </script>';
                }
            }
        }
    }

?>