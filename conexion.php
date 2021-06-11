<?php
$host="localhost";
$base="cifrado";
$usu="AndryuxD";
$pass="Uchiha1234xd";

$Conexion = new mysqli($host,$usu,$pass,$base);

if($Conexion->connect_errno){
    echo '<h1>'.'Error de conexion uwu'.'</h1>';
}
