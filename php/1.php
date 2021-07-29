<?php
include ('conexion de registro.php');

$nombre =$_POST['nombre'];
$contraseña = $_POST['password'];

//login
if ($boton($_POST("btn-iniciar"))) {
    $query = mysqli_query($conexion, "SELECT  FROM login WHERE usuario = '$nombre' AND password='$contraseña'");
    $nr = mysqli_num_rows($query);
    if ($nr==1) {
        echo '<script>alert("Bienvenido, $nombre") window.location="../html/menu-lom.html"</script>';
    }else {
        echo '<script>alert("Este usuario no existe, ") window.location="inicios.html"</script>';
    }
}
//register
if ($boton($_POST("btn-registrar"))) {
    $sqlgrabar = "INSERT INTO login(nombre, password) values('$nombre','$contraseña')";
    if (mysqli_query($conexion, $sqlgrabar)) {
        echo '<script>alert("Este usuario ha sido registrado ") window.location="inicios.html"</script>';
    }else {
        echo "Error:".$sql. "<br>" .mysqli_error($conexion);
    }
}
 
?>