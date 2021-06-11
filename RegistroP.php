<?php

require('conexion.php');
include("Filtro.php");

$usu=$_POST['idusuario'];
$nom=$_POST['nombre'];
$des=$_POST['descripcion'];

if (Filtro::filtrar($usu) || Filtro::filtrar($nom)|| Filtro::filtrar($des)){
    echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="Login.php" </script>';
}else{

    $query = "INSERT INTO tbl_proyectos(vch_nombre,id_usuario,vch_descripcion,vch_imagen) 
                VALUES('$nom',$usu,'$des','Lupa.png')";
    $resultado = mysqli_query($Conexion,$query);

    
    $Select="SELECT MAX(id_proyecto) FROM tbl_proyectos";
    $ResSelect = mysqli_query($Conexion,$Select);
    $row=mysqli_fetch_array($ResSelect);
    $id=$row['MAX(id_proyecto)'];

    $TMPIMG=$_FILES['img']['tmp_name'];
    
    $tipo=$_FILES['img']['type'];
    $arrayxd = str_split($tipo,6);
    $NombreIMG="Proyecto_".$id.'_'.$nom.'.'.$arrayxd[1];

    $URLDestino="Imagenes/".$NombreIMG;

    if (is_uploaded_file($TMPIMG)){
        copy($TMPIMG,$URLDestino);
    }

    $Insert2="UPDATE tbl_proyectos SET vch_imagen='$NombreIMG' WHERE id_proyecto=$id";
    $ResInsert2=mysqli_query($Conexion, $Insert2);

    echo    '<script type="text/javascript">
                alert("El proyecto se ha registrado existosamente");
                window.location.href="MisProyectos.php"
            </script>';
}


?>