<?php

require('conexion.php');
include("Filtro.php");

if(isset($_POST['enviar'])){
    $email = $_POST['correo'];

    $query = "SELECT * FROM tblusuario WHERE vch_email='$email'";
                $response = mysqli_query($Conexion,$query);                
                $resultado = $response-> fetch_assoc();
    if(mysqli_num_rows($response) > 0){
        
        //$resultado = mysqli_fetch_assoc($resp);
        //$resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE RESPUESTA = '$res'");
        //if($resp==$resultado['USUARIO']){
            
            header('Location:frm_opc_pregunta.php?PREGUNTA='.$resultado['vch_pregunta']);

        //}else{
          //echo '<script language="javascript">alert("NO EXITE TAL USUARIO!!!");window.location="accedeUsuario.html"</script>';
        //}
    }else{
        echo '<script language="javascript">alert("CORREO INVALIDO"); window.location="accedeUsuario.html"</script>';
    }

}


?>