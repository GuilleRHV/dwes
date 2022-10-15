<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    
<h1>Ejercicio 10</h1>
<h2>Equipo basket (array asociativo y foreach clave/valor)</h2>
<?php
    //Para las posiciones: base, escolta, alero, alapivot,pivot
    //"Jorge","Jose","Antonio","David","Sergio"
    $equipo = array("base"=>"Jorge","escolta"=>"Jose","alero"=>"Antonio","alapivot"=>"David","pivot"=>"Sergio");
    foreach($equipo as $clave=>$valor){
        echo $clave . " -> ".$valor . "<br>";
    }
    
    ?>

</body>
</html>