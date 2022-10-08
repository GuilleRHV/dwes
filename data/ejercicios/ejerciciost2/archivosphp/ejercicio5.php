<?php


if(isset($_GET["envio"])){
    $array = $_GET["nombres"];
    if(!empty($array)){
       foreach($array as $elemento){
            echo "Nombre: " . $elemento . "<br>";
        }
       // print_r($array);
    }else{
        echo "La lista esta vacia";
    }
}