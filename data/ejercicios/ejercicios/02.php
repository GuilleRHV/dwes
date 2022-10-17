<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <h1>Ejercicio 2</h1>
    <p>Imprimir la tabla de multiplicar del 8. Usar constante para que fácilmente podamos adaptarla a otros números. </p>
    <h2>Tabla del 8</h2>
    <?php
    define('LONG', 10);
    // o const LONG = 10;
    echo "<table border=1>";

    $ocho= 8;
    echo "<tr>";
    for ($fila = 1; $fila <= LONG; $fila++) {

        $num = $ocho * $fila;
        echo "<td>", $num, "</td>";
    }


    echo "</tr></table>";
    ?>

</body>

</html>