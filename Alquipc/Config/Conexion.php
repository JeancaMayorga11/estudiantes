<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "alquipc";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion) {
    echo "Conexión exitosa";
}else{
    echo"Conexión fallida";
}