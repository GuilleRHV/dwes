<?php

require_once "App.php";
if (isset($_POST["crearlista"])) {
    //$listadeseos=$_POST["deseo"];

    //$listadeseos=[$_COOKIE["nombre"]=>$_POST["deseo"]];
    json_decode($listadeseos);
    if($listadeseos==null){
        $listadeseos=$_POST["deseo"];
    }
    $listadeseos=[$_POST["deseo"]];
   
    setcookie($_COOKIE["nombre"],$listadeseos,time() + 200);
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
        <?php echo "Usuario:" . $_COOKIE["nombre"] . "tus deseos son ";

        foreach($_COOKIE[$_COOKIE["nombre"]] as $des){
            echo $des . ", ";

        }
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