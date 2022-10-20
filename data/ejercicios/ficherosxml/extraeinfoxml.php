<?php



$datos = simplexml_load_file("empleados.xml");
$apellidos = $datos->xpath("//apellidos");
$edades = $datos->xpath("//edad");

foreach($edades as $edad){
    echo "Edad: " . $edad . "<br>";
}



foreach($apellidos as $apellido){
    echo $apellido . "<br>";
}
