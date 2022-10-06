<?php

include_once "Asignatura.php";
include_once "Modulo.php";
echo "<h1>WEB DE ASIGNATURAS</h1>";
$bbdd = new Asignatura("BBDD",6);

echo "<br>" . $bbdd;

$dwes = new Modulo("DWES",9,"IFC3014");
echo "<br>" . $dwes;