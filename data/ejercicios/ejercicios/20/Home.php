<?php

require_once "App.php";

session_start();
//Crearemos la lista de deseos
if (isset($_POST["crearlista"])) {
    //$listadeseos=$_POST["deseo"];
    $nombre = $_SESSION["usuario"];
    //$listadeseos=[$_COOKIE["nombre"]=>$_POST["deseo"]];

    if (isset($_SESSION[$nombre])) {
        $listadeseos = $_SESSION[$nombre];

        $listadeseos = json_decode($listadeseos);
        //json_decode($listadeseos);
        
            foreach ($_SESSION[$nombre] as $key => $val) {
                $listadeseos[] = $val;
            }
        
        $listadeseos[] = $_POST["deseo"];
    } else {


        $listadeseos = array($_POST["deseo"]);
       // $_SESSION[$nombre][]=$_POST["deseo"];
        


    }
    $listadeseos = json_encode($listadeseos);
    $_SESSION[$nombre] = $listadeseos;

    $app = new App;
    $app->new();
}

//Llama a la funcion empty
if (isset($_POST["eliminartodo"])) {
    $app = new App;
    $app->empty();
}

//Llama a la dunciont close 
if (isset($_POST["cerrarsesion"])) {
    $app = new App;
    $app->close();
}
//Llama a la funcion delete
if (isset($_POST["eliminarid"])) {
    $app = new App;
    $app->delete();
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
        $nombre = $_SESSION["usuario"];
        $lista = null;

        echo "Bienvenido usuario " . $_SESSION["usuario"] . ", tus deseos son " . $_SESSION[$nombre];

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