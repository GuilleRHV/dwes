<?php


if (isset($_POST["envio"])) {
    $pais = $_POST['operador'];
    //Las cookies deben ser lo primero en hacer
    
    setcookie("lengua", $pais, time() + 600);
    
    $deportes[]=$_POST['deportes'];
    $jsondeportes = json_encode($deportes);
    setcookie("deportes", $jsondeportes, time() + 600);
    
    
}



