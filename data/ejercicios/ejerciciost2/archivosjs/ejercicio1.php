<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $autor=$_GET['nombreautor'];
    $editorial=$_GET['nombreeditorial'];
    $paginaslibro =  $_GET['numeropaginas'];
    $titulo =$_GET['nombretitulo'];

if(isset($_GET['nombretitulo']) && !empty($_GET['nombretitulo'])){
    
    echo "<br>Titulo del libro : " . $titulo;
    echo "<br>El nombre del autor es: " . $autor;
echo "<br>La editorial es: " . $editorial;
echo "<br>El numero de paginas es: " . $paginaslibro;
}else{
    echo'<br><h3>No has introducido ningun libro</h3>';
}



    ?>
</body>
</html>
