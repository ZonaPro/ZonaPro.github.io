<?php

session_start(); 

    if(isset($_session['usuario'])){
        header("location:menu-lom.php");
    }

?>




<!DOCTYPE html>
    <html lang="es" dir="ltr" >
        <head>
         <meta charset="uft-8">
         <meta http-equiv="X-UA-Compatible" content="IE=7">
         <meta name="viewport" content="width=device-width, user=scalable=no ,initial-scale=1.8, maxinum-scale=1.8, mininum-scale=1.0">
         <link rel="stylesheet" href="../css/REG.CSS">
         <link rel = "preconnect" href = "https://fonts.gstatic.com">
         <link href = "https://fonts.googleapis.com/css2? family = Roboto & display = swap" rel = "hoja de estilo ">
         <a href="https://icons8.com/icon/123435/application-window"></a>

         <title>
               Menu 
         </title>

        </head>
<body>
          <!--menu-->  
         <header>

          <div class="header-cont">

            <div class="logo">
            <h1>Sevi<b>Col</b></h1>
            </div>
           <div class="menu" id="show-menu">
            <nav>
                <ul>
                    <li><a href="../index.html" ><img src="https://img.icons8.com/dotty/24/000000/home-page.png"/>Inicio</a></li>
                    <br>
                    <li><div class="menu-selectd"><a href="inicios.php"class="text-menu-selectd" ><img src="https://img.icons8.com/wired/24/000000/bookmark.png"/>Plataforma</a></div></li>
                    <li><a href="../html/MENU DE AYUDA.HTML"><img src="https://img.icons8.com/dotty/24/000000/search.png"/>Saber Mas</a></li>
                    <li><a href="../html/contactanos.html"><img src="https://img.icons8.com/dotty/24/000000/add-contact-to-company.png"/>Contactenos</a></li>
                    <li><a href="../html/otros.html"><img src="https://img.icons8.com/dotty/24/000000/add.png"/>Otros</a></li>

                </ul>
            </nav>
           </div>

          </div>
         </header>
        <div class="login">
            <img class="logo" src="../img/favicones-web-1920w.ico" alt="logo de inicio">
            <h1>Inicio de Sesion</h1>
            <form action="login.php" method="POST">
                <!--username-->
                <label for="nombre" >Nombre</label>
                <input type="text" class="text" placeholder="Juan Sebastian Parra Garcia" autofocus="" required name="nombre" >
                 <!--password-->
                 <label for="password"  >Contrase&ntilde;a</label>
                 <input type="password"class="password" placeholder="*******" required name="contraseña">

                <input type="submit" class="boton" value="Iniciar Sesion" name="btn-iniciar">

                <a href="../html/recuperacion.html" target="_blank">¿Se le a olvidado su contrase&ntilde;a o usuario?</a><br>
                <a href="../html/registro.html" target="_blank">¿No tiene una cuenta?</a>

            </form>
             <!--regreso-->
        <div class="container">
            <a href="../index.html" class="icon-in" ><img src="https://img.icons8.com/windows/30/000000/import.png" alt=""></a>
     </div>
        </div>
        <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                <br>
                <br><br>
                
                <!--footer-->
                <div class="container-footer-all">
            
                    <div class="container-body">
            
                        <div class="colum1">
                            <h1>Mas informacion de la compa&ntilde;ia</h1>
            
                            <p>Esta compa&ntilde;ia tiene como fin brindar una seguridad optima a los lugares donde se le es contradado y ademas nos 
                                esforzamos para motivarlos a dar un mejor esfuerzo y dejar en alto nuestra compa&ntilde;ia.</p>
            
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
                                <label>Km. 4 N° 40 - 40 V&iacute;a Gir&oacute;n - Bucaramanga 68001000 Bucaramanga, Santander, Colombia</label>
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
                                <a href="">Informacion Compa&ntilde;ia</a> | <a href="">Privacio&acute;n y Politica</a> | <a href="">Terminos y Condiciones</a>
                            </div>
                        </div>
            
                    </div>
                
            </footer> 
  </body>
</html>
