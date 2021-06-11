
<?php

require('conexion.php');
include("Filtro.php");

if(isset($_POST['enviar'])){

    $res = $_POST['respuesta'];

    $query = "SELECT * FROM tblusuario WHERE vch_respuesta='$res'";
    $response = mysqli_query($Conexion,$query);

    if(mysqli_num_rows($response) > 0){
        
        //$resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE RESPUESTA = '$res'");
        //if($res==$resultado['RESPUESTA']){
            echo '<script language="javascript">alert("LA RESPUESTA A LA PREGUNTA SECRETA ES CORRECTA");</script>';
            header('Location:Update_password.php?correo='.$resultado['vch_email']);
        //}else{
          //  echo '<script language="javascript">alert("LA RESPUESTA ES INCORRECTA");window.location="opcPregunta.html"</script>';
        //}
    }else{
        echo '<script language="javascript">alert("LA RESPUESTA ES INCORRECTA "); window.location="index.php"</script>';
    }

}


?>