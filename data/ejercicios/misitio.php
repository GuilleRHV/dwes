<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer>
<?php
//Para usar codigo de otras páginas, tambien puedes usar sus variables
//Si hay un include y la pagina no existe/esta mal escrita salta un warning y continua ejecutandose
//Si es require si esta mal escrito aborta 
//include_once "footer.php";
    include "footer.php";
   // require "footer.php";
 
    echo"<br>El nombre del admin es: " . $nombreadmin;
?>
</footer>
</body>
</html>