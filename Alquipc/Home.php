<!DOCTYPE html>
<?php
    session_start();
    if (isset($_SESSION['ID_Usuario']) && isset($_SESSION['Usu_Nombre'])) {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <title>Home</title>
</head>
</head>
<body>
    <a href="Login/CerrarSesion.php" class="button2">Cerrar sesion</a>
    <div class="contenedor3">
        <h1><ins>Alquiler</ins></h1>
        <br>
        <label for="">
            <img width="25px" src="ICONS/calendar.svg" alt="">
            Fecha inicial
        </label>
        <input type="date">

        <label for="">
            <img width="25px" src="ICONS/calendar.svg" alt="">
            Fecha final
        </label>
        <input type="date">

        <label for="">
            <img width="25px" src="ICONS/reader.svg" alt="">
            Descripcion
        </label>
        <input type="text" placeholder="Ingrese descripcion">

        <label for="">
            <img width="25px" src="ICONS/call.svg" alt="">
            Telefono de entrega
        </label>
        <input type="number" placeholder="Ingrese telefono de entrega">

        <label for="">
            <img width="25px" src="ICONS/location.svg" alt="">
            Dirección
        </label>
        <input type="text" placeholder="Ingrese su direccion">
        
        <label for="">
            <img width="25px" src="ICONS/" alt="">
            Seleccione la ubicación
        </label>
        <select id="ciudad">
            <option value="fuera">Fuera de la ciudad (+5%)</option>
            <option value="dentro">Dentro de la ciudad (-5%)</option>
        </select>

        <label for="">
            <img width="25px" src="ICONS/calendar.svg" alt="">
            Dias iniciales
        </label>
        <input type="number" placeholder="Ingrese dias iniciales">

        <label for="">
            <img width="25px" src="ICONS/calendar.svg" alt="">
            Dias adicionales
        </label>
        <input type="number" placeholder="Ingrese dias adicionales">
        
        <button class="button" onclick="calcularPrecio()">Registrar, calcular precio</button>
        <p id="precioFinal"></p>
        
    </div>
</html>

<?php }else {
    header('location: ../Login.php');
} ?>
