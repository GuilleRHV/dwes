<?php
require_once "App.php";
$app = new App;

$app->login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>

<body>
    <h1>Ejercicio 20</h1>
    <h2>App session</h2>
    <form name="miformu" method="POST" action="index.php">
        <p>
            <label for="nombre">Inicia sesion</label>
            <p>Usuario</p>
            <input type="text" name="usuario">
            

        </p>

        <input type="submit" name="envio" id="envio" value="Añadir">

    </form>

</body>

</html>