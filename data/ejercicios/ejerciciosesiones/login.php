<?php


if (isset($_POST["envio"])) {

    if ($_POST["usuario"] == "usuario" && $_POST["password"] == 1234) {
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["rol"] = 0;
        header('Location: principal.php');
    } elseif ($_POST["usuario"] == "admin" && $_POST["password"] == 4567) {
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["rol"] = 1;
        header('Location: principal.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>

<body>
    <h1>Login sesiones</h1>
    <h2>App</h2>
    <form name="miformu" method="POST">

        <label for="nombre">Inicia sesion</label>
        <p>Usuario</p>
        <input type="text" name="usuario"><br>
        <p>Contraseña</p>
        <input type="password" name="password"><br>




        <input type="submit" name="envio" value="Añadir">

       
        
    </form>

</body>

</html>