<?php

    include 'conexion de registro.php';
    
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['password'];
    //encriptamiento de contraseña
    $contraseña_encry = hash('sha512', $contraseña);

    //insertar datos en la base de datos
        $query = "INSERT INTO usuarios(Usuario,Nombre,Correo,Clave) 
                    VALUES('$usuario', '$nombre', '$correo', '$contraseña' )";

    //verificar que el correo para que no se repita en la base de datos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if (mysqli_num_rows($verificar_correo ) > 0) {
        echo '
            <script>alert("Este correo ya esta en uso, Intenta con otro diferente.");
            window.location = "../html/registro.html";
            </script>
        ';
        exit( );

    }
     //verificar que el usuario para que no se repita en la base de datos

     $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario='$usuario'");

     if (mysqli_num_rows($verificar_usuario ) > 0) {
         echo '
             <script>alert("Este usuario ya esta en uso, Intenta con otro diferente.");
             window.location = "../html/registro.html";
             </script>
         ';
         exit( );
     }


    $ejecutar = mysqli_query($conexion,$query);
    if ($ejecutar) {
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../php/inicios.php";
        </script>
        ';
    }else {
        echo '
        <script>
            alert("Intentalo de nuevo, Usuario no almacenado");
            window.location = "../html/registro.html";
        </script>
        ';
    }
    mysqli_close($conexion);

    
?>