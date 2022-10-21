<?php

require_once "App.php";


if (isset($_POST["crearlista"])) {
    //$listadeseos=$_POST["deseo"];
    $nombre = $_COOKIE["usuario"];
    //$listadeseos=[$_COOKIE["nombre"]=>$_POST["deseo"]];
    $listadeseos = $_COOKIE[$nombre];
    if ($listadeseos == null) {
        $listadeseos = array($_POST["deseo"]);
        $listadeseos = json_encode($listadeseos);
    } else {
        $listadeseos = $_COOKIE[$nombre];
        $listadeseos = json_decode($listadeseos);
        //json_decode($listadeseos);


        $listadeseos[] = $_POST["deseo"];

        $listadeseos = json_encode($listadeseos);
    }

    setcookie($nombre, $listadeseos, time() + 400);
    $app = new App;
    $app->new();
}

if (isset($_POST["quitar"])) {
    $listadeseos = json_decode($listadeseos);
    unset($listadeseos[$_POST["ideliminar"]]);
    $listadeseos = json_encode($listadeseos);

    setcookie($nombre, $listadeseos, time() + 400);
}

if (isset($_POST["eliminartodo"])) {
    $nombre = $_COOKIE["usuario"];
    if ($listadeseos != null) {
        setcookie($nombre, $listadeseos, time() - 1);
        //Creamos cookie solo con el nombre y para que podamos seguir poniendo deseos (y no de problemas)
        setcookie($nombre, "", time() - 400);
        header("Location: Home.php");
    } else {
        $nombre = $_COOKIE["usuario"];
        setcookie($nombre, $listadeseos, time() - 1);
        //Creamos cookie solo con el nombre y para que podamos seguir poniendo deseos (y no de problemas)
        setcookie($nombre, "", time() - 400);
        header("Location: Home.php");
    }
}


if (isset($_POST["cerrarsesion"])) {
    if ($listadeseos != null) {
        //Cerramos la cookie nombre y la lista deseos
        setcookie("usuario", "", time() - 1);
        setcookie($nombre, $listadeseos, time() - 1);
        header("Location: .");
    } else {
        $nombre = $_COOKIE["usuario"];
        //Cerramos la cookie nombre y la lista deseos
        setcookie("usuario", "", time() - 1);
        setcookie($nombre, $listadeseos, time() - 1);
        header("Location: .");
    }
}

// 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        $nombre = $_COOKIE["usuario"];
        echo "Bienvenido usuario " . $_COOKIE["usuario"] . ", tus deseos son " . $_COOKIE[$nombre];

        ?>
    </p>
    <form name="miformu" method="POST">


        <p>
            <label for="ssa">Añade deseos</label>

            <input type="text" name="deseo">

        </p>


        </p>
        <input type="submit" name="crearlista" value="Nuevo deseo">
        <input type="submit" name="quitar" value="Quitar deseo">
        <input type="submit" name="eliminartodo" value="Eliminar todos los deseos">
        <input type="submit" name="cerrarsesion" value="Cerrar sesion">
        <?php
        if (isset($_POST["quitar"])) {
            echo "<h4>Introduce posicion que desea eliminar</h4>";
            echo '<p><input type="text" name="ideliminar"></p>';
            echo '<input type="submit" name="eliminarid" value="Eliminar por ID">';
        }
        ?>
    </form>
</body>

</html>