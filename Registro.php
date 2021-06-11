<?php

require('conexion.php');
include("Filtro.php");

$usu=$_POST['usuario'];
$email=$_POST['email'];
$clabe=$_POST['clabe'];
$RFC=$_POST['RFC'];
$NomEmp=$_POST['NomEmp'];
$Acepto=$_POST['Check'];
$pass=$_POST['password'];
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];


if (Filtro::filtrar($usu) || Filtro::filtrar($email)|| Filtro::filtrar($clabe)|| Filtro::filtrar($RFC)|| Filtro::filtrar($NomEmp)|| Filtro::filtrar($pass)){
    echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="Login.php" </script>';
}else{
    //Consulta correo
    $Consulta1 = "SELECT * from tblusuario WHERE vch_email='$email'";
    $resultado1 = mysqli_query($Conexion,$Consulta1);
    $rows1 = $resultado1->num_rows;
    
    //Consulta empresa
    $Consulta2 = "SELECT * from tblusuario WHERE vch_empresa='$NomEmp'";
    $resultado2 = mysqli_query($Conexion,$Consulta2);
    $rows2 = $resultado2->num_rows;
    
    if ($rows1>0){
        header ("Location: SignIn.php?email='$email'");
    }elseif ($rows2>0){
        header ("Location: SignIn.php?empresa='$NomEmp'");
    }else{
        //Registro
        if ($Acepto=='Si'){
            $query = "INSERT INTO tblusuario(vch_usuario,vch_email,vch_rfc,vch_empresa,vch_password,vch_clabe,vch_pregunta,vch_respuesta) VALUES('$usu','$email','$RFC','$NomEmp','$pass','$clabe','$pregunta','$respuesta')";
            $resultado = mysqli_query($Conexion,$query);
            
            $ConsultaSesion= "SELECT * FROM tblusuario WHERE vch_email='$email'";
            $ResultadoSesion= mysqli_query($Conexion,$ConsultaSesion);
            $RowSesion=mysqli_fetch_array($ResultadoSesion);
            $IDSesion=$RowSesion['clv_usuario'];
            session_start();
            $_SESSION['Usuario']= $IDSesion; 
            echo    '<script type="text/javascript">
                        alert("El registro ha sido exitoso, has iniciado sesion, seras redirigido a la pagina principal");
                        window.location.href="index.php"
                    </script>';
        }
    }
}
?>