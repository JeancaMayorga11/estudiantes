<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Iniciar sesion</ins></h1>
        <br>
        <form action="Login/LoginAuth.php" method="POST">
            <?php if(isset($_GET['error'])) {?>
                <p><?php echo $_GET['error']?></p>
            <?php } ?>
            <label for="">
                <img width="25px" src="ICONS/mail-open.svg" alt="">
                Correo electrónico
            </label>
            <input type="email" placeholder="Ingrese usuario" name="Correo">
            <label for="">
                <img width="25px" src="ICONS/lock-open.svg" alt="">
                Contraseña
            </label>
            <input type="password" placeholder="Ingrese contraseña" name="Contraseña">
            <button class="button">
                Ingrese
            </button>
            <a href="Registrarse.php" class="button-second">
                Registrarse
            </a>
        </form>
    </div>
</body>
</html>