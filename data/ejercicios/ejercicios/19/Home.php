<?php

require_once "App.php";
$nombre = $_COOKIE["usuario"];

if (isset($_POST["crearlista"])) {
    //$listadeseos=$_POST["deseo"];

    //$listadeseos=[$_COOKIE["nombre"]=>$_POST["deseo"]];
    $listadeseos=$_COOKIE[$nombre];
    if ($listadeseos == null) {
        $listadeseos=array($_POST["deseo"]);
        $listadeseos=json_encode($listadeseos);
        
    } else {
        $listadeseos=json_decode($listadeseos);
        //json_decode($listadeseos);
        
        
        $listadeseos[] = $_POST["deseo"];

        $listadeseos=json_encode($listadeseos);
       
    }
    setcookie($nombre, $listadeseos, time() + 200);
    $app = new App;
    $app->new();
    header("Location: New.php");
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
        <?php echo "Usuario:" . $_COOKIE["usuario"] . "tus deseos son " . $_COOKIE[$nombre];

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
    </form>
</body>

</html>