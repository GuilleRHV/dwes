<?php

//Crear o unirse a una sesion ya creada
session_start();

//$_SESSION["nombreVariable]
//contador visitas


//si no hay sesion
if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=0;
}else{
    $_SESSION["contador"]++;
}

$_SESSION["producto"]="lapiz";

echo "He visitado la pagina " . $_SESSION["contador"] . " veces.";

echo "<a href=\"sesion2.php\">Siguiente</a>";