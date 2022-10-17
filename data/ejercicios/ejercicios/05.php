<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>

    <h1>Ejercicio 5</h1>
    <h2>Numeros primos</h2>
    <?php
    define('CONSTANTE', 194);
    // o const LONG = 10;
    echo "Divisores del numero " . CONSTANTE;
    echo "<table border=1>";

    echo "<tr>";
    $cont == 0;
    //Como el numero 1 es una expeccion
    if (CONSTANTE == 1) {
        for ($i = 1; $i < CONSTANTE; $i++) {
            if (CONSTANTE % $i == 0) {
                $cont++;
                echo "<td>" . $i . "</td>";
            }
        }
    }

    //Primero comprobamos si es primo o no
    //Usamos la variable cont para saber la cantidad de divisores del numero
    $cont == 0;
    for ($i = 1; $i < CONSTANTE; $i++) {
        if (CONSTANTE % $i == 0) {
            $cont++;
        }
    }
    //En caso de que no sea primo imprimimos los numeros
    if ($cont > 1) {
        for ($i = 1; $i < CONSTANTE; $i++) {
            if (CONSTANTE % $i == 0) {
                $cont++;
                echo "<td>" . $i . "</td>";
            }
        }
        //Si es un numero primo    
    } else {
        echo CONSTANTE . " es un numero primo";
    }


    echo "</tr></table>";
    ?>

</body>

</html>