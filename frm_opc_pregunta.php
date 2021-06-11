<?php
$PREGUNTA=$_GET['PREGUNTA'];
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Pregunta Secreta</title>
</head>
<body>
    <body style ="background-color: #0d98e4">     
        <form action="consulta_pregunta.php" method="POST">
            <div class="container">
                <div class="col-md-4 offset-md-4 col-sm-12" style="margin-top: 40px;">
                    <div class="card border-success mb1-3" style="max-width: 25rem;">
                        <div class="card-header" align="center">
                            <h4 id="tituloAcceso" class="card-title text-success">Pregunta secreta</h4>
                        </div>
                        <div class="card-body">
                            <div id="alerta">
                            </div>
                            <div class="form-group">
                                <label for="usuario">Pregunta secreta:</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $PREGUNTA?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label for="res">Respuesta:</label>
                                <input name="respuesta" type="text"class="form-control" >
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success btn-block" value="enviar" id="enviar" name="enviar">Continuar</button>
                                <br>
                                <a type="submit" href="index.php">Volver Atras</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form> 
    </body>
</body>
</html>