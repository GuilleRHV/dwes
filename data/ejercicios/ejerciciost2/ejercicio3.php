<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario credenciales</h1>
    <form name="miformu" action="archivosjs/ejercicio3.php" method="GET">
        <p>
            <label for="nombre">introduce titulo</label>
            <input type="text" name="nombrepersona" id="nombrepersona">

        </p>
        
        <input type="submit" name="envio" id="envio" value="Enviar">
        </form>
        <?php

        $nombre=$_GET['nombrepersona'];
        
    
    if(isset($_GET['nombrepersona']) && !empty($_GET['nombrepersona']) && strlen($_GET['nombrepersona'])>3 && isset($_GET["envio"])){
        
        echo "<br>Hola" . $nombre . " , el nombre existe";
       
    }else{
        
        echo "Debe tener 3 letras";
        
    }
    
    
    
    
    
    
        ?>
</body>
</html>