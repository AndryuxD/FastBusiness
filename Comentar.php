<?php 
    require ('conexion.php');
    include("Filtro.php");
    session_start();
    
    if (empty($_SESSION['Usuario'])) {
        echo    '<script type="text/javascript">
                    alert("La sesion ha expirado o no existe");
                    window.location.href="index.php"
                </script>';
    }
    $usuario = $_SESSION['Usuario'];

    if (isset($_POST['comentario'])){
        $comentario =$_POST['comentario']; 
        $id_proyecto =$_POST['id_proyecto']; 
        
        if (Filtro::filtrar($comentario) || Filtro::filtrar($id_proyecto)){
            echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="Login.php" </script>';
        }else{
            
            $QueryComentario="INSERT INTO tbl_comentarios(comentario,fecha,remitente,respuestas,id_proyecto) 
                                VALUES('$comentario',NOW(),$usuario,0,$id_proyecto)";
            $ResComentario=mysqli_query($Conexion, $QueryComentario);
    
            echo    '<script type="text/javascript">
                        window.location.href="Comentarios.php?Proyecto='.$id_proyecto.'" </script>';
        }
    }
    if (isset($_POST['respuesta']) && isset($_POST['idComentario'])){
        
        $respuesta =$_POST['respuesta']; 
        $destinatario =$_POST['idComentario'];
        $id_proyecto =$_POST['id_proyecto'];  

        if (Filtro::filtrar($respuesta) || Filtro::filtrar($destinatario) || Filtro::filtrar($id_proyecto)){
            echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="Login.php" </script>';
        }else{

            $QueryRespuesta="INSERT INTO tbl_respuestas(respuesta,fecha,remitente,destinatario) 
                                VALUES('$respuesta',NOW(),$usuario,$destinatario)";
            $ResRespuesta=mysqli_query($Conexion, $QueryRespuesta);
    
            $QueryUpdate="UPDATE tbl_comentarios SET respuestas=tbl_comentarios.`respuestas`+1 
                            WHERE id_comentario=$destinatario";
            $ResUpdate=mysqli_query($Conexion,$QueryUpdate);
    
            echo    '<script type="text/javascript">
                        window.location.href="Comentarios.php?Proyecto='.$id_proyecto.'" </script>';
        }
    }
