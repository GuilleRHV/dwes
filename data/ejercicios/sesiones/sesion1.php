<?php

//Crear o unirse a una sesion ya creada
session_start();


/*$nombresesion=session_name*/ 
//$_SESSION["nombreVariable]
//contador visitas


//si no hay sesion
if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=0;
}else{
    $_SESSION["contador"]++;
}

$_SESSION["producto"]="lapiz";
$array=[2,3,4,5];
$_SESSION["array"]=$array;

echo "He visitado la pagina " . $_SESSION["contador"] . " veces.";

echo "<a href=\"sesion2.php\">Siguiente</a>";