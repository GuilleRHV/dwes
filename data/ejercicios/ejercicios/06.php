<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
<h1>Ejercicio 6</h1>
<h2>Equipo basket</h2>
<?php
    //Se puede hacer array de varias formas:
        /*$arraya=array("valor1","valor2");
          $arrayb=["valor1","valor2"];
        */
    $equipoa = array("Jorge","Jose","Antonio","David","Sergio");
    $equipob =["Jorge","Jose","Antonio","David","Sergio"];
    echo "<h3>a) Indicando sólo los nombres (foreach)</h3>";
    foreach($equipoa as $jugador){
        echo " ".$jugador;
    }
    echo "<h3>b) Indicando la posición del nombre en el array (0, 1, 2, ...). (print_r)</h3>";
    print_r($equipob);
    ?>

</body>
</html>