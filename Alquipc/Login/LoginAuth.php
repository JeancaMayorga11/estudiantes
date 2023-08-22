<?php
    
    session_start();

    include_once('../Config/Conexion.php');

    if (isset($_POST['Correo']) && isset($_POST['Contraseña'])) {

        function Validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $correo = Validar($_POST['Correo']);
        $contraseña = Validar($_POST['Contraseña']);

        if (empty($correo)) {
            header('location: ../Login.php?error=El correo es requerido');
            exit();
        }elseif (empty($contraseña)) {
            header('location: ../Login.php?error=La contraseña es requerida');
            exit();
        }else {
            $Sql = "SELECT * FROM usuarios WHERE Usu_Email = '$correo'";
            $query = mysqli_query($conexion, $Sql);

            if ($query->num_rows==1){
                $usuarioQ = $query->fetch_assoc();

                $ID_Usuario = $usuarioQ['ID_Usuario'];
                $Usu_Nombre = $usuarioQ['Usu_Nombre'];
                $Usu_Apellido = $usuarioQ['Usu_Apellido'];
                $Correo = $usuarioQ['Usu_Email'];
                $Contraseña = $usuarioQ['Usu_Contrasena'];
                $Usu_Telefono = $usuarioQ['Usu_Telefono'];
                $Usu_Direccion = $usuarioQ['Usu_Direccion'];


                if ($correo === $Correo) {
                    if ($contraseña === $Contraseña) {
                        $_SESSION['ID_Usuario'] = $ID_Usuario;
                        $_SESSION['Usu_Nombre'] = $Usu_Nombre;
                        $_SESSION['Usu_Apellido'] = $Usu_Apellido;
                        $_SESSION['Usu_Email'] = $correo;
                        $_SESSION['Usu_Telefono'] = $Usu_Telefono;
                        $_SESSION['Usu_Direccion'] = $Usu_Direccion;

                        echo "<script>
                            alert('Bienvenido $Usu_Nombre');
                            location.href = '../Home.php'
                        </script>";
                    }else {
                        header('location:../Login.php?error=Correo o contraseña incorecta1');
                    }
                }else {
                    header('location:../Login.php?error=Correo o contraseña incorecta2');
                }
            }else {
                header('location:../Login.php?error=Correo o contraseña incorecta3');
            }
        }
    }