<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de credenciales</h1>
    <?php

 
if(isset($_GET['nombreusu']) && !empty($_GET['nombreusu'])){
    $usuario =$_GET['nombreusu'];
    echo "<br>Usuario introducido : " . $usuario;
}else{
    echo'<br><h3>No has introducido ningun usuario</h3>';
}

echo "<br>El nombre del usuario es: " . $_GET['nombreusu'];
echo "<br>La password es: " . $_GET['passwd'];



//Recogida raidiobuton
if(isset($_GET["envio"])){
    $equipobasket = $_GET["equipo"];
    if(!empty($equipobasket)){
        echo "<br>Tu equipo de basket preferido es " . $equipobasket;
    }else{
        echo "<br>No has elegido ningun equipo";
    }
    }


    if(isset($_GET["envio"])){
        $menupreferido = $_GET["menus"];
        if(!empty($menupreferido)){
            echo "<br>tu plato preferido es " . $menupreferido;
        }else{
            echo "<br>No has elegido ningun menu";
        }
    }

    //Recogida de listas desplegables multiples opciones

    if(isset($_GET["envio"])){
        $menupreferidos = $_GET["menusm"];
        if(!empty($menupreferidos)){
            foreach($menupreferidos as $menu)
            echo "<br>tu plato preferido es " . $menu;
        }else{
            echo "<br>No has elegido ningun menu";
        }
        echo "<br>Print_R";
        print_r($menupreferidos);
    }


    if(isset($_GET["envio"])){
        $ip = $_GET["ip"];
        if(!empty($ip)){
            echo "<br>La ip es " . $ip;
        }else{
            echo "<br>No has elegido ningun ip";
        }
    }

    

    
    ?>
</body>
</html>