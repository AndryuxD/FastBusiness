 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header id="Header uwu">
    </header>
    <br>
    <div class="container-fluid">
        <div align="center">
            <div class="col-lg-3 col-md-12 col-sm-12" style="margin-top: 10px;">
                <div class="card border-success mb-3" style="max-width: 25rem;">
                    <div class="card-header" align="center">
                        <img src="Imagenes/Login.jpg" width="100px" height="100px" alt="">
                        <h1>Reestablecer password</h1>
                    </div>
                    <div class="card-body">  
                        <form action="ActualizarPass.php" method="post" >
                                <div class="form-group">
                                <input type="text" name="email" id=""  placeholder="Ingrese de nuevo su E-Mail" class="form-control">
                                </div>
                                <input type="password" name="contrasena" id="contrasena" minlength="8" maxlength="64" class="form-control" placeholder="Nueva password" autocomplete="off" required>
                                <br><br>
                                <input type="submit" value="Cambiar password" class="btn btn-outline-success btn-block"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>