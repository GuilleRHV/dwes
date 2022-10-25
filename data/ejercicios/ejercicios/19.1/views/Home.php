<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hola <?=$_COOKIE["nombre"]?></h2>
    <hr>
    <h2>Deseos</h2>
    <?php
    if(count($listadeseos)){
    foreach($listadeseos as $id=>$deseo){
        echo "<br>Deseo nº " . $id . ": " . $deseo;
    }
}else{
    echo "La lista de deseos esta vacia";
}
    ?>
    <h2>Nuevos deseos</h2>
    <form action="?method=new" method="post">
    <label for="new">Nuevo deseo</label>
    <input type="text" name="new">
    <input type="submit" value="nuevo">
  </form>
  
</body>
</html>