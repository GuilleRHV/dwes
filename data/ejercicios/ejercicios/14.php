<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>

<body>
    <h1>Ejercicio 14</h1>
    <h2>Calculadora</h2>
    <form name="miformu" method="GET">
        <p>

            <input type="text" name="op1" id="op1">
            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="op2" id="op2">

        </p>

        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>

    <?php

    $nombre = $_GET['nombrepersona'];
    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];
    $operador = $_GET['operador'];
    $resultado;

    if ($op1 == null || $op2 == null) {
        /* echo $_SERVER['HTTP_REFERER'];
        header("Location: ".$_SERVER['HTTP_REFERER']);
        die();*/
    } else {


        if (isset($_GET["envio"])) {
            if ($operador == "+") {
                $resultado = $op1 + $op2;
            } elseif ($operador == "-") {
                $resultado = $op1 - $op2;
            } elseif ($operador == "*") {
                $resultado = $op1 * $op2;
            } elseif ($operador == "/") {
                $resultado = $op1 / $op2;
            }
            echo "El resultado es " . $resultado;
        }
    }
    ?>

</body>

</html>