<?php
require('conexion.php');
session_start();
if (empty($_SESSION['Usuario'])) {
    include('PublicHeader.php');
} else {
    header("Location: Error.php");
    include('Header.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '235374181504001',
                cookie: true,
                xfbml: true,
                version: 'v11.0'
            });

            FB.AppEvents.logPageView();

        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));


        function onLogin() {
            FB.login((response) => {
                if (response.authResponse) {
                    FB.api('/me', (response) => {
                        window.location.assign('RegistroFB.php?id=' + response.id + '&name=' + response.name + '&email=' + response.email);
                    });
                }
            });
        }
    </script>

    <header id="Header uwu">
    </header>
    <br>

    <div class="container-fluid">
        <div align="center">
            <div class="col-lg-3 col-md-12 col-sm-12" style="margin-top: 10px;">
                <div class="card border-success mb-3" style="max-width: 25rem;">
                    <div class="card-header" align="center">
                        <img src="Imagenes/Login.jpg" width="100px" height="100px" alt="">
                        <h1>Iniciar sesion</h1>
                    </div>
                    <div class="card-body">

                        <form action="InicioSesion.php" method="post">

                            <input type="email" name="email" class="form-control" placeholder="E-mail" autocomplete="off" required><br>
                            <input type="password" minlength="1" maxlength="64" name="password" class="form-control" placeholder="Password" required><br><br>
                            <input type="submit" value="Entrar" class="btn btn-outline-success btn-block"><br>
                            <a href="ForgotPassword.php">Forgot password?</a><br>
                            <?php

                            $helper = $fb->getRedirectLoginHelper();

                            $permissions = []; // Optional permissions
                            $loginUrl = $helper->getLoginUrl('https://fastbusiness.info/fb-callback.php', $permissions);
                            ?>
                            <a href="<?php echo $loginUrl; ?>">Entra con Facebook</a><br>

                            <fb:login-button scope="public_profile,email" onlogin="onLogin();">
                            </fb:login-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>