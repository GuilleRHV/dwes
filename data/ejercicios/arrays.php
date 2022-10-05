<?php
echo"<h1>Arrays</h1><br>";
//Los elementos son heterogeneos, es decir los elementos pueden ser de cualquier tipo
//Las claves de los arrays solo pueden ser enteros/float
$miarray = array(1,"hola",3.5,false);

echo "<br>El elemento 2 del array: " . $miarray[2];
//Mostrar
    echo"<br><h3>Mostrar arrays</h3><br>";
    //foreach, var dumpo, print_r
    foreach($miarray as $elmio){
        echo "<br>El elemento es : " . $elmio;
    }
   
    print_r($miarray);
    echo"<br>";
    var_dump($miarray);
    echo"<br>";
    //Para ver el numero de elementos de un array
    echo "Longitud del array: " . count($miarray) . "<br>";
//Otra forma de crear un array
$array2=[2,3,4,6,3];
print_r($array2);
echo"<br>";
//Para multiplicarlo por 2
    //¡¡¡¡IMPORTANTE DESPUES DEL AS USAR & PARA CAMBIARLO, SI NO LO USAMOS SOLO LO MOSTRARÁ, NO LO CAMBIARÁ!!!!
foreach($array2 as &$elemento){
    $elemento= $elemento * 2;
}
print_r($array2);
echo"<br>";
//Para añadir un elemento a un array
echo "<h3>Añadir un elemento a un array</h3><br>";
$array2[]=12;
$array2[19]=44;
print_r($array2);
echo"<br>";
//Eliminar un elemento
echo "<h3>Eliminar un elemento</h3>";
//Borramos la posicion 3
unset($array2[3]);
print_r($array2);
echo"<br> Y la posicion 3? : " . $array2[3];
$array2[]=99;
echo"<br>";
print_r($array2);
$array2[3]=13;
echo"<br>";
print_r($array2);
echo"<br>Y que tiene la posicion 3 : " . $array2[3] . "<br>";

echo"Mostrar clave y valor del array<br>";
foreach($array2 as $cla => $val){
    echo "<br>Clave: " . $cla . " y Valor: " . $val;
}
echo"<br>";
//ARRAYS ASOCIATIVOS o INYESADOS
//Las claves son strings
echo"<h2>Arrays asociativos</h2></br>";
$persona = array("edad"=>20,"peso"=>65,"dni"=>"43242423F","casado"=>false,24=>"rss",17=>"nss");

print_r($persona);
echo "<br>";
foreach($persona as $cla => $val){
    echo "<br>Clave: " . $cla . " y Valor: " . $val;
}
$persona[]=7;
echo"<br>";
print_r($persona);
echo"<br>Persona dni: " . $persona["dni"];

//Arrays multidimensionales (MATRICES)
echo"<h2>Arrays multidimensionales (MATRICES)</h2>";
$arrm = [ 0=>[3,5,6],1=>[4,8,6,5]  ];
echo "<br>Debe salir 5 : " . $arrm[1][3];