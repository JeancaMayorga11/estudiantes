<?php
include("Conexion.php");

$alquileres = "SELECT * FROM Alquiler";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/tabla.css">
</head>
<body>

    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Alquileres</div>
        <div class="table__header">Fecha Inicio</div>
        <div class="table__header">Fecha Final</div>
        <div class="table__header">Descripción</div>
        <div class="table__header">Cantidad</div>        
        <div class="table__header">Dirección</div>
        <div class="table__header">Descuento</div>
        <div class="table__header">Aumento</div>
        <div class="table__header">Días</div>
        <div class="table__header">Costo Total</div>
        <?php $resultado = mysqli_query($Conexion, $alquileres);
        while($row=mysqli_fetch_assoc($resultado)) { ?>

            <div class="table__item"><?php echo $row["Alq_FechaI"];?></div>
            <div class="table__item"><?php echo $row["Alq_FechaF"];?></div>
            <div class="table__item"><?php echo $row["Alq_Descripcion"];?></div>
            <div class="table__item"><?php echo $row["Alq_Cantidad"];?></div>
            <div class="table__item"><?php echo $row["Alq_Direccion"];?></div>
            <div class="table__item"><?php echo $row["Alq_TotalDescuento"];?></div>
            <div class="table__item"><?php echo $row["Alq_TotalAumento"];?></div>
            <div class="table__item"><?php echo $row["Alq_DiasIniciales"];?></div>
            <div class="table__item"><?php echo $row["Alq_CostoTotal"];?></div>S
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["ID_Alquiler"];?>" class="table__item__link">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["ID_Alquiler"];?>" class="table__item__link">Eliminar</a></div>
            <?php } mysqli_free_result($resultado);?>
    </div>
    <script src="confirmacion.js"></script>

    </body>
</html>