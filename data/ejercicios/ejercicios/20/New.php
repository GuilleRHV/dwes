<?php


require "App.php";
session_start();
$nombre = $_SESSION["usuario"];
if (isset($_POST["nuevo"])) {


    if (isset($_SESSION[$nombre])) {
        $listadeseos = $_SESSION[$nombre];
        // $listadeseos = json_decode($listadeseos);
        $listadeseos = $_SESSION[$nombre];
        $listadeseos = json_decode($listadeseos);


        $listadeseos[] = $_POST["deseo"];

        //  $listadeseos = json_encode($listadeseos);



    } else {
        $listadeseos[] = $_POST["deseo"];
    }
    $listadeseos = json_encode($listadeseos);
    $_SESSION[$nombre] = $listadeseos;
    $app = new App;
    $app->new();
}

if (isset($_POST["cancelar"])) {
    header("Location: Home.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="miformu" method="POST">
        <p>
            <?php
            $nombre = $_SESSION["usuario"];
            $lista = null;


            echo "Bienvenido usuario " . $_SESSION["usuario"] . ", tus deseos son " . $_SESSION[$nombre];


            ?>
        </p>
        <p>
            <label for="ssa">Añade deseos</label>

            <input type="text" name="deseo">

        </p>

        <input type="submit" name="nuevo" value="Añadir deseo">
        <input type="submit" name="cancelar" value="Cancelar">


    </form>
</body>

</html>