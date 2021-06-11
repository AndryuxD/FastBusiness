<?php
require('conexion.php');
include("Filtro.php");

$usu=$_POST['usuario'];
$email=$_POST['email'];
$clabe=$_POST['clabe'];
$RFC=$_POST['RFC'];
 
$Acepto=$_POST['Check'];
$pass=$_POST['password'];
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];
 

$Estado=move_uploaded_file($fichero["tmp_name"], "pdf/".$fichero["name"]);


if (Filtro::filtrar($usu) || Filtro::filtrar($email)|| Filtro::filtrar($clabe)|| Filtro::filtrar($RFC)|| Filtro::filtrar($pass)){
    echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="Login.php" </script>';
}else{
    //Consulta correo
    $Consulta1 = "SELECT * from tbl_patrocinador WHERE Correo='$email'";
    $resultado1 = mysqli_query($Conexion,$Consulta1);
    $rows1 = $resultado1->num_rows;
    

    if ($rows1>0){
        header ("Location: SignIn.php?email='$email'");
    }else{
 
        //Registro
        if ($Acepto=='Si'){
            $query = "INSERT INTO tbl_patrocinador(Usuario,Correo,RFC,Cuenta_bancaria,vch_Password,vch_pregunta,respuesta) VALUES('$usu','$email','$RFC','$clabe','$pass','$pregunta','$respuesta')";
            $resultado = mysqli_query($Conexion,$query);
            
            $ConsultaSesion= "SELECT * FROM tbl_patrocinador WHERE Correo='$email'";
            $ResultadoSesion= mysqli_query($Conexion,$ConsultaSesion);
            $RowSesion=mysqli_fetch_array($ResultadoSesion);
            $IDSesion=$RowSesion['Usuario'];
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