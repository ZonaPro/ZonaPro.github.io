<?php
include 'conexion de registro.php';
//recibir y almacenar en variables
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$contraseña = $_POST["password"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

//consulta para insertar
$insertar = "INSERT TO usuarios(Usuario,Nombre,Contraseña,Correo,Telefono) VAlUES('$usuario','$nombre','$contraseña','$correo','$telefono',)";

$verificar_usuario = mysqli_query($conexion,"SELECT = FROM usuarios WHERE Usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo'<script>alert("El usuario ya esta registrado")
    </script>';
    exit;
}
$verificar_correo = mysqli_query($conexion,"SELECT = FROM usuarios WHERE Correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo'<script>alert("El correo ya esta registrado")
    </script>';
    exit;
}
$verificar_telefono = mysqli_query($conexion,"SELECT = FROM usuarios WHERE Telefono = '$telefono'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo'<script>alert("El Telefono ya esta registrado")
    </script>';
    exit;
}

//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado) {
    echo'Error al registrarse';

}else {
    echo'Usuario registrado exitosamente';
}
//cerrar sesion
mysqli_close($conexion);