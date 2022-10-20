<?php



if (isset($_POST["nuevo"])) {
    
    setcookie("listadeseos", $_COOKIE["datospersonales"], time() - 1);
    
$listadeseos=$_COOKIE["listadeseos"];
$listadeseos[]=$_POST["deseos"];

setcookie("listadeseos", $listadeseos, time() - 1);
    

}
header("Location: Home.php")
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

echo "Usuario:" . $_COOKIE["nombre"] . "tus deseos son ". var_dump($_COOKIE["listadeseos"]);
        ?>
        </p>
        <p>
            <label for="ssa">Añade deseos</label>

            <input type="text" name="deseo">

        </p>
        
        <input type="submit" name="nuevo" value="Añadir deseo">

       
    </form>
</body>

</html>