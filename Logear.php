<?php

    require('conexion.php');

    $nombre=$_POST['nombre'];

    $RegistroSesion= "INSERT INTO tblusuario(vch_usuario,vch_email,vch_password,vch_clabe,vch_rfc,vch_empresa) 
                        VALUES ('$nombre','','','','','')";
    $ResultadoRegistro= mysqli_query($Conexion,$RegistroSesion);

    
    $ConsultaSesion= "SELECT * FROM tblusuario ORDER BY clv_usuario DESC";
    $ResultadoSesion= mysqli_query($Conexion,$ConsultaSesion);
    $RowSesion=mysqli_fetch_array($ResultadoSesion);
    $IDSesion=$RowSesion['clv_usuario'];
    session_start();
    $_SESSION['Usuario']= $IDSesion; 
    echo '<script type="text/javascript"> alert("Has iniciado sesion correctamente"); window.location.href="ComentariosP.php" </script>';
?>