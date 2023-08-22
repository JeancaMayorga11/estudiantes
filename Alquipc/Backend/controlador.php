<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controlador</title>
    <link rel="stylesheet" href="/CSS/controlador.css">
</head>
<body>

</body>
</html>

<?php
require_once('descuentos.php');
require_once('insertar.php');



// Iniciarlizar varibles.
$Finicio = null;
$Ffinal = null;
$describe = null;
$Cantiequipos = null;
$direc = null;
$location = null;
$Descuentt = null;
$increment = null;
$Diasiniciales = null;
$ValorTotal = null;

// Capturar datos.
$FechaI = $_POST['datestart'];
$FechaF = $_POST['dateEnd'];
$Descripcion = $_POST['descrip'];
$Direccion = $_POST['address'];
$Ciudad = $_POST['ubicacion'];
$Descuento = intval($_POST['descuento']);
$Aumento = intval($_POST['aument']);
$Dias = intval($_POST['days']);
$VTotal = intval($_POST['cTotal']);

// Validar aumento y descuento
if($Aumento == 1){
    $location = "fuera de la ciudad";
    if($Ciudad != 1){
        $location = "Esta fuera de la ciudad";
    }
}else{
    $location = "Está dentro de la ciudad";
}

if($Descuento == 1){
    $direc = "Establecimiento";
    if($Direccion != 1){
        $direc = "Recibe alquiler en el establecimiento";
    }
}else{
    $direc = "Recibe alquiler en su casa dentro de la ciudad ";
}


// Se crea  el alquiler.
$alqui = new $alquileres();
$discount = $alqui->calcular_Descuento($VTotal);
$incremento = $alqui->calcular_Aumento($VTotal);
$datos = $alqui->crearAlquiler($FechaI, $FechaF, $Descripcion, $location, $Dias, $VTotal);

/* Se crea asigna el curso.
$curso = new Curso();
$curso_asignado = $curso->asignar_Curso($cur);*/

// Se instancia objeto para validar los descuentos.
$descuento = new Descuentos();
$descuento->generar_Descuento( $direc[1], $VTotal);



// Asignar descuento y/o aumento retornados a una lista.

$descuento_asignado =[$descuento->discount()];
$aumento_asignado = [$incremento->aumento(),$aumento->aumento];

// Se instancia objeto de la clase matricula.
/* $FECHA = new FechaI($datos[0],$datos[1],$curso_asignado[0],$curso_asignado[1],$e_adso);
$FECHA->Mostrar_FECHA();*/
// Se imprimen todos los datos generados por las clases creadas.

echo "<link rel='stylesheet' href='Backend/controlador.css'>";
echo "<center><div class='resul_01'>";
echo " <br>Fecha Inicio: ".$FechaI;
echo "<br>Fecha Final: ".$FechaF;
echo "<br>Descripcion: ".$Descripcion;
echo "<br>Cantidad Equipos: ".$CantidadE;
echo "<br>Ubicación: ".$Ciudad;
echo "<br>Dirección : ".$Direccion;
echo "<br>Descuento total generado: $".$descuento_asignado;
echo "<br>Aumento total generado: $".$aumento_asignado;
echo "<br>Dias iniciales: ".$Dias;
echo "<br>Total a pagar del alquiler: $".$VTotal ; ?>
