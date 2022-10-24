<?php
session_start();//Creo o me uno a la session


//PARA BORRAR UNA SESION
//Crear array vacio
$_SESSION = array();
//elimina informacion
session_destroy();
//Borra cookie
setcookie(session_name(),'',time()-7200);
/*PARA CHROME
setcookie(session_name(),'',time()-7200,'/');*/



echo "La pagina se ha cargado " . $_SESSION["contador"] . " veces";
echo "<br>Producto : ". $_SESSION["producto"];