<?php
function comprobarcredenciales($nombreusu, $clave)
{
    if ($nombreusu == "usuario" && $clave == "1234") {
        $credenciales["claveusu"] = "usuario";
        $credenciales["rol"] = 0;
        return $credenciales;
    }
    if ($nombreusu == "admin" && $clave == "4567") {
        $credenciales["claveusu"] = "admin";
        $credenciales["rol"] = 1;
        $credenciales;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["envio"])) {
        $credentials = comprobarcredenciales($_POST["usuario"], $_POST["password"]);
        if ($credentials == false) {
            $error = 1;
        } else {
            //si son validas
            session_start();
            $_SESSION["loginok"] = $credentials;
            header("Location: principal.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Pagina de acceso</h2>
    <?php
    if (isset($error) && $error = 1) {
        echo "<p> <font color='red'>Usuario/contraseña invalida</font></p>";
    }
    ?>
    <form name="miformu" method="POST" action="login.php">

        <label for="nombre">Inicia sesion</label>
        <p>Usuario</p>
        <input type="text" name="usuario"><br>
        <p>Contraseña</p>
        <input type="password" name="password"><br>




        <input type="submit" name="envio" value="Añadir">

        <?php
        if ($invalido) {
            echo "<br>Usuario invalido";
        }
        ?>
    </form>
</body>

</html>