<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <h1>Ejercicio 4</h1>
    <p>Imprimir los primeros 10 números de la sucesión de fibonacci. La sucesión comienza con los números 0 y 1; 2​ a partir de estos, «cada término es la suma de los dos anteriores» </p>
    <h2>Fibonacci (10 primeros numeros)</h2>
    <?php
    define('LONG', 10);
    // o const LONG = 10;
    $n1 = 0;
    $n2 = 1;
    $aux;
    echo "<table border=1>";

    echo "<tr>";
    echo "<td>0</td>";
    $num = 0;
    for ($fila = 1; $fila < LONG; $fila++) {
        $aux = $n1;
        $n1 = $n2;
        $n2 = $n1 + $aux;

        echo "<td>", $n1, "</td>";
    }


    echo "</tr></table>";
    ?>

</body>

</html>