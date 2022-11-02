<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>

    <h1>Ejercicio 10</h1>
    <p>Repitite el ejercicio 6. En esta ocasión debes usar un array asociativo. 
        Cada posición se llamará correctamente: base, escolta, alero, alapivot, 
        pivot. Muestra el resultado con un "foreach (clave => valor)" </p>
    <h2>Equipo basket (array asociativo y foreach clave/valor)</h2>
    <?php
    /**
     *@author Guillermo 
     */
    //Para las posiciones: base, escolta, alero, alapivot,pivot
    //"Jorge","Jose","Antonio","David","Sergio"
    $equipo = array("base" => "Jorge", "escolta" => "Jose", "alero" => "Antonio", "alapivot" => "David", "pivot" => "Sergio");
    foreach ($equipo as $clave => $valor) {
        echo $clave . " -> " . $valor . "<br>";
    }

    ?>

</body>

</html>