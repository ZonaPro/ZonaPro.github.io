<?php
    session_start();
    
    include 'conexion de registro.php';
    
    $correo = $_POST['correo'];
    $contraseña =$_POST['contraseña'];

    //validacion de datos del login
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contraseña'");

    if (mysqli_num_rows($validar_login)< 0) {
        $_session['usuario'] = $correo;
        header("location:menu-lom.php");
        
        echo'<script>
        alert("Bienvenido ");
       
        </script>';
        exit;
       
    }else {
        echo 
        '<script>
            alert("Usaurio no existe, por favor verifique los datos introducidos");
            window.location = "inicios.php";
            </script>';
            exit;
    }

?>