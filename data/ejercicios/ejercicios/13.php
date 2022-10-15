<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Ejercicio 13</h1>
    <h2>Formulario nombre valido</h2>
    <form name="miformu" method="GET">
        <p>
            <label for="nombre">introduce titulo</label>
            <input type="text" name="nombrepersona" id="nombrepersona" value="<?php 
                                                                            if(isset($_GET["envio"])){
                                                                                if(strlen($_GET['nombrepersona'])<3){
                                                                                 echo "El nombre no es valido";
                                                                                }
                                                                            }
                                                                            ?>">

        </p>
        
        <input type="submit" name="envio" id="envio" value="Enviar" minlength="3">
        </form>
    
    <?php

    $nombre=$_GET['nombrepersona'];    
    
    if(isset($_GET["envio"])){
        //strlen mide la longitud del String
       if(strlen($_GET['nombrepersona'])>3){
           echo "Bienvenido ".$nombre;
       }else{
            echo "Debe tener 3 letras";
        }
    }

    
    ?>

</body>
</html>