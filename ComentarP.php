<?php 
    require ('conexion.php');
    session_start();
    if (empty($_SESSION['Usuario'])) {
        echo    '<script type="text/javascript">
                    alert("La sesion ha expirado o no existe");
                    window.location.href="ComentariosP.php"
                </script>';
    }
    $usuario = $_SESSION['Usuario'];

    if (isset($_POST['comentario'])){
        $comentario =$_POST['comentario']; 
        $QueryComentario="INSERT INTO tbl_comentarios(comentario,fecha,remitente,respuestas) 
                            VALUES('$comentario',NOW(),$usuario,0)";
        $ResComentario=mysqli_query($Conexion, $QueryComentario);

        echo    '<script type="text/javascript">
                    window.location.href="ComentariosP.php"
                </script>';
    }
    if (isset($_POST['respuesta']) && isset($_POST['idComentario'])){
        
        $respuesta =$_POST['respuesta']; 
        $destinatario =$_POST['idComentario']; 

        $QueryRespuesta="INSERT INTO tbl_respuestas(respuesta,fecha,remitente,destinatario) 
                            VALUES('$respuesta',NOW(),$usuario,$destinatario)";
        $ResRespuesta=mysqli_query($Conexion, $QueryRespuesta);

        $QueryUpdate="UPDATE tbl_comentarios SET respuestas=tbl_comentarios.`respuestas`+1 
                        WHERE id_comentario=$destinatario";
        $ResUpdate=mysqli_query($Conexion,$QueryUpdate);

        echo    '<script type="text/javascript">
                    window.location.href="ComentariosP.php"
                </script>';
    }
