<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <h1>Ejercicio 2</h1>
    <h2>Tabla del 8</h2>
    <?php
    define('LONG', 10);
    // o const LONG = 10;
    echo "<table border=1>";

    const NUM = 8;
    echo "<tr>";
    for ($fila = 1; $fila <= LONG; $fila++) {

        $num = NUM * $fila;
        echo "<td>", $num, "</td>";
    }


    echo "</tr></table>";
    ?>

</body>

</html>