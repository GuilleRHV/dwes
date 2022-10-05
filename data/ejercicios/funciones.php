<?php

$var1 = 5;
$var2 = 7;
function suma($a,$b){
    global $var1;
    global $var2;
    $var1=99;
    $var2 = 100;
    echo "<br>La variables dentro de la var1 y var2 son " . $var1 . " y " . $var2;
    //Definicion variables estatica
static $varestatica = 0;
echo "<br>El valor de la var estatica es : " . $varestatica;
$varestatica++;
    return $a+$b;

}

echo "La variables fuera de la funcion var 1 y var 2son " . $var1 . " y " . $var2;

echo "<br>Llamada a la suma 1 vez es : " . suma(3,4);
echo "<br>Llamada a la suma 2 vez es : " . suma(3,4);
echo "<br>Llamada a la suma 3 vez es : " . suma(3,4);


