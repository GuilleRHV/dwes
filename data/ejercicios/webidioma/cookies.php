<?php


if (isset($_POST["envio"])) {
    $pais = $_POST['selectoridiomas'];
    //Las cookies deben ser lo primero en hacer
    
    
    
    $coches=$_POST['coches'];
    $jsoncoches = json_encode($coches);
    setcookie("idioma",$pais, time() + 600);
   setcookie("coches", $jsoncoches, time() + 600);
    
    
}



