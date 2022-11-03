<?php

require_once "App.php";




if(isset($_POST["crearlista"])){
    $app = new App;
    $app ->new();

}


//Llama al metodo empty
if (isset($_POST["eliminartodo"])) {
    $app = new App;
    $app->empty();
}

//Llama al metodo close
if (isset($_POST["cerrarsesion"])) {
    $app = new App;
    $app->close();
}
//Llama al metodo delete
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
        //Da la bienvenida al usuario gracias a las cookies
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
            //Se abrira un formulario para eliminar segun la posicion
            echo "<h4>Introduce posicion que desea eliminar</h4>";
            echo '<p><input type="text" name="ideliminar"></p>';
            echo '<input type="submit" name="eliminarid" value="Eliminar por ID">';
        }
        ?>
    </form>
</body>

</html>