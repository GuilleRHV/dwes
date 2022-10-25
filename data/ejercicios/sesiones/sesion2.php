<?php
session_start();//Creo o me uno a la session


//PARA BORRAR UNA SESION
//Crear array vacio
//$_SESSION = array();
//elimina informacion
//session_destroy();
//Borra cookie
//setcookie(session_name(),'',time()-7200);
/*PARA CHROME
setcookie(session_name(),'',time()-7200,'/');*/



$arr = $_SESSION['array'];
echo "El array es " . $_SESSION['array'];

echo "La pagina se ha cargado " . $_SESSION["contador"] . " veces";
echo "<br>Producto : ". $arr;

foreach($_SESSION['array'] as $key=>$val){
    echo $val . "<br>";
}