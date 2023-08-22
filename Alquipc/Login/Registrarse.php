<?php
    session_start();
    include_once('../Config/Conexion.php');
    if (isset($_POST['#Documento']) 
    && isset($_POST['Nombre']) 
    && isset($_POST['Apellido']) 
    && isset($_POST['Correo']) 
    && isset($_POST['Telefono']) 
    && isset($_POST['Direccion']) 
    && isset($_POST['Contraseña']) 
    && isset($_POST['RContraseña'])) {
        function validar($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $documento = validar($_POST['#Documento']);
        $nombre = validar($_POST['Nombre']);
        $apellido = validar($_POST['Apellido']);
        $correo = validar($_POST['Correo']);
        $telefono = validar($_POST['Telefono']);
        $direccion = validar($_POST['Direccion']);
        $contraseña = validar($_POST['Contraseña']);
        $Rcontraseña = validar($_POST['RContraseña']);

        $datosusuario = '#Documento=' . $documento . '&Nombre=' . $nombre;

        if (empty($documento)) {
            header("location: ../Registrarse.php?error=El numero de documento es requerido&$datosusuario");
            exit();
        }elseif(empty($nombre)){
            header("location: ../Registrarse.php?error=El nombre es requerido&$datosusuario");
            exit();
        }elseif(empty($apellido)){
            header("location: ../Registrarse.php?error=El apellido es requerido&$datosusuario");
            exit();
        }elseif(empty($correo)){
            header("location: ../Registrarse.php?error=El correo electronico es requerido&$datosusuario");
            exit();
        }elseif(empty($telefono)){
            header("location: ../Registrarse.php?error=El telefono es requerido&$datosusuario");
            exit();
        }elseif(empty($direccion)){
            header("location: ../Registrarse.php?error=La direccion es requerida&$datosusuario");
            exit();
        }elseif(empty($contraseña)){
            header("location: ../Registrarse.php?error=La contraseña es requerida&$datosusuario");
            exit();
        }elseif(empty($Rcontraseña)){
            header("location: ../Registrarse.php?error=Repetir la contraseña es requerida&$datosusuario");
            exit();
        }elseif($contraseña != $Rcontraseña){
            header("location: ../Registrarse.php?error=Las contraseñas no coinciden&$datosusuario");
            exit();
        }else {
            
            $sql = "SELECT * FROM usuarios WHERE ID_Usuario = '$documento'";
            $query = $conexion->query($sql);

            if (mysqli_num_rows($query) > 0){
                header("location: ../Registrarse.php?error=El usuario ya existe");
                exit();
            }else{
                $sql2 = "INSERT INTO usuarios(ID_Usuario, Usu_Nombre, Usu_Apellido, Usu_Email, Usu_Contrasena, Usu_Telefono, Usu_Direccion, Usu_Rol) VALUES('$documento', '$nombre', '$apellido', '$correo', '$contraseña', '$telefono', '$direccion', 'Cliente')";
                $query2 = $conexion->query($sql2);

                if ($query2) {
                    header("location: ../Registrarse.php?success=Usuario creado con exito");
                    exit();
                }else {
                    header("location: ../Registrarse.php?success=Ocurrio un error");
                    exit();
                }

            }
        }
    }else {
        header('location: ../Registrarse.php');
        exit();
    }