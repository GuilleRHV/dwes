<?php

//time(); epoch time , unix -> segundos 1970 (timepo de expiracion)
//time()+(24*60*60)
//Otro ejemplo strtotime(("+1 minute"))

//Definir una cookie

setcookie("primeracookie", "prueba", time() + 60); //una semana
setcookie("segundacookie", $archivojson, time() + 600);
echo $_COOKIE["primeracookie"];
//setcookie(nombre, valor, expiracion);
$miarray = ["hola", 25, [2, 4, 6]];
$arr=['a'=>'hola','b'=>25,'c'=>[2, 4, 6]];
//Poner el array en una cadena
$infoguardar = serialize($miarray);
//Ahora json
echo "<h1>Info en json</h1>";
echo "<h3>Codificar json</h3>";
$infojson = json_encode($miarray);
$infojsonasocativo = json_encode($arr);
echo $infojson . "<br>";
echo $infojsonasocativo;
echo "<br><h3>Descodificar json</h3><br>";
$descodificarjson = json_decode($infojsonasocativo);
//echo $descodificarjson;



/*
echo "<h1>Mi primera cookie</h1>";

//BORRAR COOKIE
//setcookie("primeracookie","aceptado",time()-120);


//echo "<h1>Mi primera eliminada</h1>";
//CADUCAR COOKIE
//unset() caduca la cookie, no la borra

echo "<br>Valor de la cookie1: " . $_COOKIE["primeracookie"];

echo "<pre>";
echo "<br>Valor de la cookie2:";
var_dump($infojson);
//var_dump(unserialize($_COOKIE["segundacookie"]));

echo "<br>Numero de cookies creadas: " . count($_COOKIE);

/*FORMATO JSON
clave:valor

json_encode(objeto)
json_decode(objeto)


*/