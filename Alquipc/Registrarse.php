<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="contenedor2">
        <h1><ins>Registrarse</ins></h1>
        <br>
        <form action="Login/Registrarse.php" method="POST">

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            <br>
            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']?></p>
            <?php } ?>
            <label for="">
                <img width="25px" src="ICONS/id-card.svg" alt="">
                Número de documento
            </label>
            <input type="number" placeholder="Ingrese número de documento" name="#Documento">

            <label for="">
                <img width="25px" src="ICONS/person-circle.svg" alt="">
                Nombre
            </label>
            <input type="text" placeholder="Ingrese su nombre" name="Nombre">

            <label for="">
                <img width="25px" src="ICONS/person-circle.svg" alt="">
                Apellido
            </label>
            <input type="text" placeholder="Ingrese su apellido" name="Apellido">

            <label for="">
                <img width="25px" src="ICONS/mail-open.svg" alt="">
                Correo electrónico
            </label>
            <input type="email" placeholder="Ingrese su correo electrónico" name="Correo">

            <label for="">
                <img width="25px" src="ICONS/call.svg" alt="">
                Teléfono
            </label>
            <input type="number" placeholder="Ingrese telefono" name="Telefono">

            <label for="">
                <img width="25px" src="ICONS/location.svg" alt="">
                Dirección
            </label>
            <input type="text" placeholder="Ingrese su direccion" name="Direccion">

            <label for="">
                <img width="25px" src="ICONS/lock-open.svg" alt="">
                Contraseña
            </label>
            <input type="password" placeholder="Ingrese contraseña" name="Contraseña">

            <label for="">
                <img width="25px" src="ICONS/lock-open2.svg" alt="">
                Repetir contraseña
            </label>
            <input type="password" placeholder="Repita contraseña" name="RContraseña">

            <input type="submit" class="button" value="Registrarse">
            <a href="Login.php" class="button-second">
                Ingresar
            </a>
        </form>
    </div>
</body>
</html>