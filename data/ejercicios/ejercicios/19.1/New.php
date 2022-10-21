<?php

$nombre =$_COOKIE["usuario"];
require "App.php";

if (isset($_POST["nuevo"])) {
    $listadeseos=$_COOKIE[$nombre];
    $listadeseos=json_decode($listadeseos);
    //json_decode($listadeseos);
    
    
    $listadeseos[] = $_POST["deseo"];

    $listadeseos=json_encode($listadeseos);
   

    setcookie($nombre, $listadeseos, time() + 200);
    $app = new App;
    $app->new();
}

if(isset($_POST["cancelar"])){
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
        $nombre = $_COOKIE["usuario"];
        echo "Bienvenido usuario " . $_COOKIE["usuario"] . ", tus deseos son " . $_COOKIE[$nombre];

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