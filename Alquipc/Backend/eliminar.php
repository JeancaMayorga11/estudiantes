<?php
include("conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM alquiler WHERE Alq_Descripcion = '$Descripcion'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar){
    header("Location: Backend/Tabla.php");
}else {
    echo "<script>alert('No se pudo eliminar el alquiler');window.history.go(-1);</script>";
}