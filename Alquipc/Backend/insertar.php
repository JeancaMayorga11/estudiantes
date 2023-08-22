<?php

include("Conexion.php");
include ("controlador.php");

$FechaI = $_POST['datestart'];
$FechaF = $_POST['dateEnd'];
$Descripcion = $_POST['descrip'];
$Direccion = $_POST['address'];
$Ciudad = $_POST['ubicacion'];
$Descuento = intval($_POST['descuento']);
$Aumento = intval($_POST['aument']);
$Dias = intval($_POST['days']);
$VTotal = intval($_POST['cTotal']);


$insertar = "INSERT INTO alquiler (Alq_FechaI, Alq_FechaF, Alq_Descripcion, Alq_Cantidad, Alq_CostoTotal, Alq_Ubicacion, Alq_Direccion, Alq_Ubicacion, Alq_TotalDescuento, Alq_TotalAumento, Alq_DiasIniciales) 
VALUES ('$FechaI','$FechaF','$Descripcion','$Direccion','$Ciudad','$Descuento','$Aumento', '$Dias', '$VTotal')";


$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('Se ha regitrado el alquiler con exito');
    </script>";

}else {
    echo "<script>alert('No se puedo registrar el alquiler');window.history.go(-1);</script>";
}