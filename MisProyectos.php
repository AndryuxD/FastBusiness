<?php 
    require('conexion.php');
    include("Filtro.php");
    
    /* establecer el limitador de caché a 'private' */
    session_cache_limiter('private');
    $cache_limiter = session_cache_limiter();
    
    /* establecer la caducidad de la caché a 10 minutos */
    session_cache_expire(10);
    $cache_expire = session_cache_expire();
    
    /* iniciar la sesión */
    session_start();
    if (empty($_SESSION['Usuario'])) {
        header('Location: index.php');
    }else{
        /*$clv_trabajador=$_SESSION['Usuario'];

        $consultaTrabajador = " CALL sp_SelectSession($clv_trabajador)";
        $resultado=mysqli_query($Conexion, $consultaTrabajador);

        $num_filas = $resultado->num_rows;
        if ($num_filas==0)
            header("Location: ../login.html");

        $row=mysqli_fetch_array($resultado);
        mysqli_free_result($resultado);
        mysqli_close($Conexion);*/
        $Usuario=$_SESSION['Usuario'];
        $ConsultaProyecto = "SELECT * from tbl_proyectos WHERE id_usuario=$Usuario";
        $resultado=mysqli_query($Conexion, $ConsultaProyecto);
        include('Header.php');
    }
    //require('../conexion.php');*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <header id="Header uwu">
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="aplicacion" class="container">
    
        <button class="btn btn-block btn-primary" @click="ShowForm()" id="newProject" >Nuevo proyecto</button>
        <button style="display:none;" class="btn btn-block btn-primary" @click="HideForm()" id="myProjects">Mis proyectos</button><br><br>
        <div id="form" style="display:none">
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 10px;">
                <div class="card border-success mb-3" style="max-width: 25rem;">
                    <div class="card-header" align="center">
                        <h2>Registro de proyectos</h2>
                    </div>
                    <div class="card-body">
                        
                        <form action="RegistroP.php" method="post"  enctype="multipart/form-data"  >

                            <input type="text" name="nombre" minlength="3" maxlength="100" class="form-control" placeholder="Nombre del proyecto" autocomplete="off" required><br>
                            <input type="text" name="idusuario" value="<?php echo $Usuario ?>" hidden><br>
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required>
                            <br>
                            Imagen
                            <input type="file" class="form-control" name="img" id="img">
                            <br><br>
                            <input type="submit" value="Registrar" class="btn btn-outline-success btn-block">  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects">
        <?php if (empty($_GET['Proyecto']) && empty($_POST['search'])){ ?>
            <div class="row">
                <form action="MisProyectos.php" method="POST">

                    <fieldset>
                        <input name="search" type="search" placeholder="Buscar" class=" col-lg-10 form-control ">
                        <!--<input type="image" src="https://images.vexels.com/media/users/3/140723/isolated/preview/158241d2079a635fb0cae49accb56da5-icono-de-lupa-by-vexels.png" widht="35px" height="35px">
                        -->
                        
                    </fieldset>
                </form>
            </div>
            <div class="row">
                <?php while ($Fila=mysqli_fetch_array($resultado)){ ?>
                    <div class="col-lg-3" >
                        <a href="Comentarios.php?Proyecto=<?php echo $Fila['id_proyecto']; ?>" class="col-lg-3">
                            <div >
                                <img src="Imagenes/<?php echo $Fila['vch_imagen']; ?>" width="200px" height="150px" alt="<?php echo $Fila['vch_nombre']; ?>">
                                <h3><?php echo $Fila['vch_nombre']; ?></h3>
                                <h4><?php echo $Fila['vch_descripcion']; ?></h4>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php }elseif (empty($_GET['Proyecto'])){ 
                $search=$_POST['search'];
                if (Filtro::filtrar($search)){
                    echo '<script type="text/javascript"> alert("Has introducido datos con caracteres no permitidos, intentalo de nuevo"); window.location.href="MisProyectos.php" </script>';
                }
                ?> 
                <div class="row">
                    <form action="MisProyectos.php" method="POST">
                    
                        <fieldset>
                            <input name="search" type="search" placeholder="Buscar" class="form-control ">
                            <!--<input type="image" src="https://images.vexels.com/media/users/3/140723/isolated/preview/158241d2079a635fb0cae49accb56da5-icono-de-lupa-by-vexels.png" widht="35px" height="35px">
                            -->
                            
                        </fieldset>
                    </form>
                    <a href="MisProyectos.php" class="btn btn-md btn-outline-info" style="max-height: 40px;">Eliminar busqueda</a>
                </div>
                <?php 
                    $CS = "SELECT * from tbl_proyectos WHERE vch_nombre='$search'";
                    $RS=mysqli_query($Conexion, $CS);
                    $num_filas = $RS->num_rows;
                    if ($num_filas>0) {
                        ?>
                            <h1>Resultados de la busqueda "<?php echo $search; ?>"</h1>
                        <?php
                        while ($RowSearch=mysqli_fetch_array($RS)){ ?>

                            <div class="col-lg-3">
                                <a href="Comentarios.php?Proyecto=<?php echo $RowSearch['id_proyecto']; ?>" class="col-lg-3">
                                    <div >
                                        <img src="Imagenes/<?php echo $RowSearch['vch_imagen']; ?>" width="200px" height="150px" alt="<?php echo $RowSearch['vch_nombre']; ?>">
                                        <h3><?php echo $RowSearch['vch_nombre']; ?></h3>
                                        <h4><?php echo $RowSearch['vch_descripcion']; ?></h4>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        <h1>No hay resultados de la busqueda "<?php echo $search; ?>"</h1>
                    <?php } ?>

            <?php }else { 
                $Proyecto=$_GET['Proyecto'];
                $CP = "SELECT * from tbl_proyectos WHERE id_proyecto=$Proyecto";
                $RP=mysqli_query($Conexion, $CP);
                $RowProyecto=mysqli_fetch_array($RP);
            ?>
            <center>
                <div class="row">
                    <div class="col-lg-1">
                        <h4>  </h4>
                    </div>
                    <div class="col-lg-11 row">
                        <a href="index.php">
                            <h5>
                                Inicio 
                                <img src="Imagenes/Home.png" width="30px" height="30px" alt="">
                            </h5>
                        </a>
                        <a href="MisProyectos.php">
                            <h5>
                                / Mis Proyectos
                                <img src="Imagenes/Proyectos.png" width="30px" height="30px" alt="">
                            </h5>
                        </a>
                        <h5>
                            / <?php echo $RowProyecto['vch_nombre']; ?>
                        </h5>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                    <div class="col-lg-5">
                        <div >
                            <img src="Imagenes/<?php echo $RowProyecto['vch_imagen']; ?>" width="400px " height="300px" alt="<?php echo $RowProyecto['vch_nombre']; ?>">
                            <h3><?php echo $RowProyecto['vch_nombre']; ?></h3>
                            <h4><?php echo $RowProyecto['vch_descripcion']; ?></h4>
                        </div>
                    </div>
            </center>
        <?php } ?>
        </div>
    </div>    
<br>

    
    <script type="text/javascript" src="css/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="css/popper.min.js"></script>
    <script type="text/javascript" src="css/bootstrap.min.js"></script>
    
    <script src="./vue.js"></script>
    <script>
        var app= new Vue({
            el: '#aplicacion',
            data: {
                form:false,
                SelectCI:'Control'
            },
            methods:{
                ShowForm: function(asd) {
                    this.form=true;
                    var form = document.getElementById("form");
                    var newP = document.getElementById("newProject");
                    var myP = document.getElementById("myProjects");
                    var projects = document.getElementById("projects");
                    form.style.display="inline";
                    projects.style.display="none";
                    newP.style.display="none";
                    myP.style.display="inline";
                },
                HideForm: function() {
                    var form = document.getElementById("form");
                    var newP = document.getElementById("newProject");
                    var myP = document.getElementById("myProjects");
                    var projects = document.getElementById("projects");
                    form.style.display="none";
                    newP.style.display="inline";
                    projects.style.display="inline";
                    myP.style.display="none";
                    
                }               
            }
        })   
    </script>
</body>
</html>
