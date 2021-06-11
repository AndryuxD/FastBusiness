<?php 
    require('conexion.php');
    session_start();
    if (empty($_SESSION['Usuario'])) {
        header('Location: Logeo.php');
    }
    $id_usuario=$_SESSION['Usuario'];
    $SelectUsuario = "SELECT * FROM tblusuario WHERE clv_usuario='$id_usuario'";
    $ResUsuario= mysqli_query($Conexion,$SelectUsuario);
    $RowUsuario=mysqli_fetch_array($ResUsuario);
    $nombre = $RowUsuario['vch_usuario'];
    include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    *{
        font-size:small
    }
    </style>
</head>
<body>
    <header id="Header uwu">
    </header>
    <br>
    <div id="aplicacion" class="container">
        <div class="row">
            <div class="col-lg-5    ">
                <img src="Imagenes/SalchichaAtun2xd.png" widht="450px" height="450px" alt="">
            </div>
            <div class="col-lg-7" >
                <br>
                <br>
                <br>
                <br>
                <h1>Proyecto de salchichas de atun</h1>
                <br>
                <p style="font-size:medium">Hecho con tres ingredientes nobles:</p>
                <p style="font-size:medium">Lomo de atún aleta amarilla + Hierbas y especias naturales + Aceite de oliva.
                <p style="font-size:medium">Contiene 4.7% de pan molido</p> 
                <p style="font-size:medium">Elaboradas con métodos artesanales </p> 
                <p style="font-size:medium">No contiene Soya </p> 
                <p style="font-size:medium">99kcal | 16g proteína | 1g grasa </p> 
                <p style="font-size:medium">No contiene conservadores.</p> 
            </div>
        </div>
        <br>
        <div class="">
            <div align="center">
                <form action="ComentarP.php" method="POST">
                    <textarea v-model="Comentario" style="font-size:medium" name="comentario" id="comentario" cols="20" rows="1" placeholder="Añade un comentario público como <?php echo $nombre?>..." 
                    maxlength="400" class="form-control" required></textarea>
                    <div class="row float-right">
                        <input v-if="Comentario!=''" type="reset" value="Cancelar" class="btn btn-md btn-primary">
                        <input type="submit" value="Comentar"  class="btn btn-md btn-primary">
                    </div>
                </form>
            </div>

            <?php 
                require('conexion.php');
                $querySelectC = "SELECT * FROM tbl_comentarios, tblusuario 
                                    WHERE tblusuario.`clv_usuario` = tbl_comentarios.`remitente`";
                $ResCom = mysqli_query($Conexion, $querySelectC);
                while ($Fila = mysqli_fetch_array($ResCom)) {
                ?>
                <br>
                <div>
                    <b> 
                        <?php 
                            if ($Fila['clv_usuario']==$id_usuario){
                                echo 'Tu'.' ';
                            }else{
                                echo $Fila['vch_usuario'].' '; 
                            }
                        ?> 
                    </b>
                        <?php 
                            echo ' '.$Fila['fecha'];
                        ?>
                </div>
                <div>
                    <p style="font-size:medium">
                        <?php echo $Fila['comentario'];  ?>
                    </p>
                    <button id="<?php echo 'Cancelar'.$Fila['id_comentario']; ?>" class="btn btn-md btn-primary" @click="Hide(<?php echo $Fila['id_comentario']; ?>)" style="font-size:medium; display:none;">Cancelar</button>
                    <button class="btn btn-md btn-primary" @click="Show(<?php echo $Fila['id_comentario']; ?>)" style="font-size:medium;">Responder</button>
                </div>
                <br>
                <center>
                    <div class=" col-lg-11" >
                        <form action="ComentarP.php" method="POST" id="<?php echo $Fila['id_comentario'];?>" style="display: none">
                            <textarea name="respuesta" id="respuesta" cols="20" rows="1" placeholder="Añade una respuesta pública como <?php echo $nombre?>..." 
                            maxlength="400" class="form-control" required></textarea>
                            <input type="text" name="idComentario" value="<?php echo $Fila['id_comentario'] ?>" hidden>
                            <div class="row float-right">
                                <input type="reset" value="Cancelar" class="btn btn-md btn-primary">
                                <input type="submit" value="Responder"  class="btn btn-md btn-primary">
                            </div>
                        </form>
                        <br>
                        <div align="left">
                                <button id="<?php echo 'VerR'.$Fila['id_comentario']; ?>" class="btn btn-md btn-primary" <?php if ($Fila['respuestas']==0){ echo "hidden"; }?> @click="ShowR(<?php echo $Fila['id_comentario']; ?>)" >
                                    Ver <?php echo $Fila['respuestas']; ?> respuestas
                                </button>
                                <button id="<?php echo 'OcultarR'.$Fila['id_comentario']; ?>" class="btn btn-md btn-primary" <?php if ($Fila['respuestas']==0){ echo "hidden"; }?> style="display:none" @click="HideR(<?php echo $Fila['id_comentario']; ?>)">
                                    Ocultar <?php echo $Fila['respuestas']; ?> respuestas 
                                </button>
                        </div>
                        <?php 
                            if ($Fila['respuestas']>0){
                                require('conexion.php');
                                $Id_Comentario=$Fila['id_comentario'];
                                $querySelectR = "SELECT * FROM tblusuario,tbl_respuestas 
                                                    WHERE tblusuario.`clv_usuario` = tbl_respuestas.`remitente`
                                                    AND  tbl_respuestas.`destinatario` = $Id_Comentario";
                                $ResRes = mysqli_query($Conexion, $querySelectR);
                                ?>
                                <div align="left" id="<?php echo 'Respuestas'.$Fila['id_comentario']; ?>" style="display:none"> <?php
                                while ($Fila2 = mysqli_fetch_array($ResRes)) {?>
                                        <br>
                                        <div>
                                            <b> 
                                                <?php 
                                                    echo $Fila2['vch_usuario'].' '; 
                                                ?> 
                                            </b>
                                                <?php 
                                                    echo ' '.$Fila2['fecha'];
                                                ?>
                                        </div>
                                        <div>
                                            <p style="font-size:medium">
                                                <?php echo $Fila2['respuesta']; ?>
                                            </p>
                                            <button class="btn btn-md btn-primary" style="font-size:medium">Responder</button>
                                        </div>
                                <?php
                                }?>
                                </div>
                            <?php
                            }
                            ?>
                    </div>
                </center>
            <?php
            }
            ?>
        </div>
    </div>    

    <script type="text/javascript" src="../css/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../css/popper.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap.min.js"></script>

    <script src="./vue.js"></script>
    <script>
        var app= new Vue({
            el: '#aplicacion',
            data: {
                Comentario:"",
                SelectCI:'Control'
            },
            methods:{
                Show: function(id_Comentario) {
                    var x = document.getElementById(id_Comentario);
                    var cancelar = 'Cancelar'+id_Comentario;
                    var y = document.getElementById(cancelar);
                    x.style.display="block"
                    y.style.display="inline"
                },
                Hide: function(id_Comentario) {
                    var x = document.getElementById(id_Comentario);
                    var cancelar = 'Cancelar'+id_Comentario;
                    var y = document.getElementById(cancelar);
                    x.style.display="none"
                    y.style.display="none"
                    
                },
                ShowR: function(id_Comentario) {
                    var VerR = 'VerR'+id_Comentario;
                    var OcultarR = 'OcultarR'+id_Comentario;
                    var Respuestas = 'Respuestas'+id_Comentario;
                    var x = document.getElementById(VerR);
                    var y = document.getElementById(OcultarR);
                    var z = document.getElementById(Respuestas);
                    x.style.display="none"
                    y.style.display="inline"
                    z.style.display="inline"
                },
                HideR: function(id_Comentario) {
                    var VerR = 'VerR'+id_Comentario;
                    var OcultarR = 'OcultarR'+id_Comentario;
                    var Respuestas = 'Respuestas'+id_Comentario;
                    var x = document.getElementById(VerR);
                    var y = document.getElementById(OcultarR);
                    var z = document.getElementById(Respuestas);
                    x.style.display="inline"
                    y.style.display="none"
                    z.style.display="none"
                }                
            }
        })   
    </script>
</body>
</html>