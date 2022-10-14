<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
<h1>Ejercicio 3</h1>
<h2>Divisibles por 3 (1-10)</h2>
<?php
    define('LONG', 10);
    // o const LONG = 10;
    echo "<table border=1>";

    echo "<tr>";
        for ($fila = 1; $fila <= LONG; $fila++) {
            
           //Si es divisible por 0 aparece 
            if($fila%3==0){
            echo "<td>", $fila, "</td>";
            }            
        }
        
    
    echo "</tr></table>";
    ?>

</body>
</html>