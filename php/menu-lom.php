<?php
    session_start();

    if(!isset($_session['usuario'])){
        echo'
            <script>
                alert("Por favor debes inicar seion");
                window.location = "inicios.html";
            </script>
        ';
        header("location:inicios.html");
        session_destroy();
        die(); 
       
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MENU</title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      
       
    </head>
    <body>
        <main>
            <form action="../index.html" class="formulario" id="formulario" method="POST">

                <div class="formulario__grupo " id="grupo__nombre">
                    <label class="formulario__grupo" id="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="REGIRSTO DE ESTUDIANTE">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 digitos y solo puede contener letras entra las cuales pueden ser mayuscula o minuscula.</p>
        
                 </div>   
                <!--grupo:adonde se dirige-->
                <div class="formulario__grupo " id="grupo__nombre">
                    <label class="formulario__grupo" id="formulario__label">Apellido</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="REGIRSTO DE ESTUDIANTE">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 digitos y solo puede contener letras entra las cuales pueden ser mayuscula o minuscula.</p>
        
                 </div>   
                 <select name="format" id="format">
                    <option selected disabled>Tipo de Identificacion</option>
                    <option value="C1">Registro Civil</option>
                     <option value="C2">Tarjeta de Identidad</option>
                    <option value="C3">Cedula Cuidadana</option>
                    <option value="C4">Otro</option>
                    </select>
                                
                 <div class="formulario__grupo " id="grupo__nombre">
                    <label class="formulario__grupo" id="formulario__label">N° de identificacion</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="REGIRSTO DE ESTUDIANTE">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 digitos y solo puede contener letras entra las cuales pueden ser mayuscula o minuscula.</p>
        
                 </div>   
             
            <select name="format" id="format">
                <option selected disabled>A QUE COLEGIO VIENE</option>
                <option value="Colegio1">CITD JULIO FLOREZ</option>
                 <option value="Colegio2">EL ARCADIA</option>
                <option value="Colegio3">CELESTIN FREINET</option>
                <option value="Colegio4">GERARDO MOLINA</option>
                </select>
                            
                <!--grupo:por que motivo-->
             <div class="formulario__grupo " id="grupo__nombre">
                <label class="formulario__grupo" id="formulario__label">Motivo por el cual se dirige a este lugar</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="REGIRSTO DE ESTUDIANTE">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 digitos y solo puede contener letras entra las cuales pueden ser mayuscula o minuscula.</p>
    
             </div>          
 <!--grupo:tiempo-->
 <div class="formulario__grupo " id="grupo__correo">
    <label class="formulario__grupo" id="formulario__label">Cuanto tiempo estima a la llegada a este lugar</label>
<div class="formulario__grupo-input">
    <input type="text" class="formulario__input" name="correo" id="correo" placeholder="1 HORA Y MEDIA">
    <i class="formulario__validacion-estado fas fa-times-circle"></i>
</div>
<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos y guion bajo.</p>

</div>

 
<!--grupo:vehiculo-->
    <select name="format" id="format">
        <option selected disabled>EN QUE TIPO DE VEHICULO VIENE</option>
        <option value="CARRO">Carro</option>
        <option value="Moto">Moto</option>
        <option value="Bicicleta">Bicicleta</option>
        <option value="ninguno">ninguno</option>
    </select>




<!--GRUPO PARA TERMINOS Y CONDICONES-->
<div class="formulario__grupo " id="grupo__terminos">
    <label class="formulario__label">
        <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
        Acepto los Terminos y Condiciones
    </label>
</div>

<!--boton de enviar-->
<div class="formulario__mensaje " id="formulario__mensaje">
<p><i class="fas fa-exclamation-triangle"></i><b>Error:</b>Por favor rellene el formulario correctamente</p>
</div>
<div class="formulario__grupo formulario__grupo-btn enviar">
    <button type="submit" class="formulario__btn">Enviar</button>
    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente</p>
</div>
        </form>
        <div class="container">
            <a href="php/cerrar_sesion.php" class="icon-in" ><img src="https://img.icons8.com/windows/30/000000/import.png" alt=""></a>
     </div>
        </main>
     

        <script src="js/formulario.js"></script>
     
     <!--footer-->
      <div class="container-footer-all">

         <div class="container-body">
 
             <div class="colum1">
                 <h1>Mas informacion de la compañia</h1>
 
                 <p>Esta compañia tiene como fin brindar una seguridad optima a los lugares donde se le es contradado y ademas nos 
                     esforzamos para motivarlos a dar un mejor esfuerzo y dejar en alto nuestra compañia.</p>
 
             </div>
 
             <div class="colum2">
 
                 <h1>Redes Sociales</h1>
 
                 <div class="row">
                     <a href="https://www.facebook.com/SevicolLtdaOficial"><img src="../icon/facebook.png">
                     <label>Siguenos en Facebook</label></a>
                 </div>
                 <div class="row">
                    <a href="https://twitter.com/Sevicol_Ltda">
                     <img src="../icon/twitter.png">
                     <label>Siguenos en Twitter</label>
                 </a>
                 </div>
                 <div class="row">
                     <a href="https://www.instagram.com/sevicol_ltda/">
                         <img src="../icon/instagram.png">
                         <label>Siguenos en Instagram</label>
                     </a>
                 </div>
                 <div class="row">
                     <a href="https://www.youtube.com/channel/UCzIPJNBrzUJgA6loaqQ3Imw/videos">
                         <img src="../icon/icons8-youtube-play-button-36.png">
                     <label>Siguenos en Youtube</label></a>
                 </div>
                 <div class="row">
                   <a href="https://co.pinterest.com/Sevicol/">  
                     <img src="../icon/pinterest.png">
                     <label>Siguenos en Pinteres</label></a>
                 </div>
 
 
             </div>
 
             <div class="colum3">
 
                 <h1>Informacion Contactos</h1>
 
                 <div class="row2">
                     <img src="../icon/house.png" >
                     <label>Km. 4 N° 40 - 40 Vía Girón - Bucaramanga 68001000 Bucaramanga, Santander, Colombia</label>
                 </div>
 
                 <div class="row2">
                     <img src="../icon/smartphone.png">
                     <label>(7) 6457003</label>
                 </div>
 
                 <div class="row2">
                     <img src="../icon/contact.png">
                      <label>comunicacionescorporativas
                          @sevicol.com.co</label>
                 </div>
 
             </div>
 
         </div>
     
     </div>
     
     <div class="container-footer">
            <div class="footer">
                 <div class="copyright">
                     © 2021 Todos los Derechos Reservados | <a href="https://ftzonapro.000webhostapp.com/index.html">XD</a>
                 </div>
 
                 <div class="information">
                     <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                 </div>
             </div>
 
         </div>
     
 </footer>  
    </body>

</html>