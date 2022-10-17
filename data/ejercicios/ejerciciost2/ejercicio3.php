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
    <form name="miformu" method="GET">
        <p>
            <label for="nombre">introduce titulo</label>
            <input type="text" name="nombrepersona" id="nombrepersona">

        </p>
        
        <input type="submit" name="envio" id="envio" value="Enviar" minlength=3>
        </form>
    
    <?php

        $nombre=$_GET['nombrepersona'];
        
    
    if(isset($_GET["envio"])){
        
       if(strlen($_GET['nombrepersona'])>3){
           echo "Bienvenido ".$nombre;
       
        }else{
    
        echo "Debe tener 3 letras";
        
    }
}
    ?>

</body>
</html>