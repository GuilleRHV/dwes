<?php



if (isset($_POST["caducar"])) {
    setcookie("datospersonales", $_COOKIE["datospersonales"], time() - 1);
    setcookie("nombre", $_COOKIE["nombre"], time() - 1);
    require_once "App.php";
    header("Location: index.php");
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
        <h2>Hola <?php echo $_COOKIE["nombre"] ?></h2>
        <input type="submit" name="caducar" value="caducar Cookie">
    </form>
</body>

</html>