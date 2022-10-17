<?php

//time(); epoch time , unix -> segundos 1970 (timepo de expiracion)
//time()+(24*60*60)
//Otro ejemplo strtotime(("+1 minute"))

//Definir una cookie
//setcookie(nombre, valor, expiracion);
$miarray=["hola",25,[2,4,6]];
//Poner el array en una cadena
$infoguardar = serialize($miarray);
setcookie("primeracookie", "aceptado", time() + 60); //una semana
setcookie("segundacookie", $infoguardar, time() + 600);

echo "<h1>Mi primera cookie</h1>";

//Borrar cookie
//setcookie("primeracookie","aceptado",time()-120);
//echo "<h1>Mi primera eliminada</h1>";
echo "<br>Valor de la cookie: " . $_COOKIE["primeracookie"];
echo "<pre>";
var_dump(unserialize($_COOKIE["segundacookie"]));
echo "</pre>";
echo "<br>Numero de cookies creadas: " . count($_COOKIE);
