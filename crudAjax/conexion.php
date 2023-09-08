<?php
function conexion(){
    $host = "localhost";
    $user = "root";
    $pass = ""; // Intencionalmente incorrecto
    $based = "crudbasico";

    $conect = mysqli_connect($host, $user, $pass, $based);

    if ($conect) {
        //echo "Conexión exitosa a la base de datos.";
        return $conect;
    } else {
        echo "sin conexion.";
    }
}

// Llamada a la función de conexión
//$conexion = conexion();


