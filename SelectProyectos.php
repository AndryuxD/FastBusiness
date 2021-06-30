<?php

require('conexion.php');
//Recuperar valores get

if (isset($_GET['EXAMPLE']))
    $EXAMPLE = $_GET['EXAMPLE'];

//Consulta de los proyectos
$ConsultaProyecto = "SELECT * from tbl_proyectos";
$resultado = mysqli_query($Conexion, $ConsultaProyecto);

//Se crea una variable de tipo array 
$data = [];

//Se llena la variable con los datos de la consulta recorriendo cada fila con un ciclo
while ($row = mysqli_fetch_assoc($resultado)) {
    array_push($data, $row);
}

//Se codifica el array con formato JSON 
$data = json_encode($data);

//Se escribe para que se pueda leer con la funcion asincrona
echo $data;
