<?php
if (isset($_POST["submit"])){
    setcookie("color",$_POST["col"],time()+300);

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
    <form name="miformu" method="POST">

        <select name="col">
            <option value="rojo">rojo</option>
            <option value="azul">azul</option>
            <option value="amarillo">amarillo</option>

        </select>




        </p>
        <input type="submit" name="seleccionarcolor" value="Seleccionar color">


    </form>
    <a href="?method=colorrojo">Rojo</a>
    <a href="?method=colorazul">Azul</a>
    <a href="?method=coloramarillo">Amarillo</a>
</body>

</html>