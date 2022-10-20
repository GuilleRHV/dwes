
<?php

$datos = simplexml_load_file("empleados.xml");
var_dump($datos);

if($datos==false){
    echo "No existe el fichero";
}
echo "<br>Recorro el fichero</br>";
foreach($datos as $dato){
    print_r($dato);
}