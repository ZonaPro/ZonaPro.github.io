<?php
//llamando los campos del correo
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono =$_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje =$_POST['mensaje'];

//datos para el correo
$destinario= "davidstivenpinuela@gmail.com";
$asunto ="Contacto desde la pagina de sevicol";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefon: $telefono \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje";

//enviando mensaje o Correo
mail($destinario, $asunto, $carta);
header('Location:../html/exito.html')

//encabenzado del correo



?>