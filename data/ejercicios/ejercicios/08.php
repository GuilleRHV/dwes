<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    
<h1>Ejercicio 8</h1>
<h2>Equipo basket insertando uno a uno</h2>
<?php
    $equipo[] = "Jorge";
    $equipo[] = "Jose";
    $equipo[] = "Antonio";
    $equipo[] = "David";
    $equipo[] = "Sergio";
   
   
    echo "<h3>a) Indicando sólo los nombres (foreach)</h3>";
    foreach($equipo as $jugador){
        echo " ".$jugador;
    }
    echo "<h3>b) Indicando la posición del nombre en el array (0, 1, 2, ...). (print_r)</h3>";
    print_r($equipo);
    ?>

</body>
</html>