<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 11</h1>
    <p>Crea un formulario para enviar los datos de registro de un libro: título, autor, editorial, páginas. </p>
    <h2>Formulario libro</h2>
    <form name="miformu" method="GET">
        <p>
            <label for="titulo">introduce titulo</label>
            <input type="text" name="nombretitulo" id="nombretitulo">

        </p>
        <p>
            <label for="autor">introduce autor</label>
            <input type="text" name="nombreautor" id="nombreautor">

        </p>
        <p>
            <label for="editorial">introduce editorial</label>
            <input type="text" name="nombreeditorial" id="nombreeditorial">

        </p>
        <p>
            <label for="paginas">introduce nº paginas</label>
            <input type="text" name="numeropaginas" id="numeropaginas">

        </p>
        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>

    <?php
    //Usamos $_GET para obtener el valor del "name" del input
    $autor = $_GET['nombreautor'];
    $editorial = $_GET['nombreeditorial'];
    $paginaslibro =  $_GET['numeropaginas'];
    $titulo = $_GET['nombretitulo'];
    //Isset (si existe)
    if (isset($_GET['nombretitulo'])) {
        if (!empty($_GET['nombretitulo'])) {
            echo "<br>Titulo del libro : " . $titulo;
            echo "<br>El nombre del autor es: " . $autor;
            echo "<br>La editorial es: " . $editorial;
            echo "<br>El numero de paginas es: " . $paginaslibro;
        } else {
            echo '<br><h3>No has introducido ningun libro</h3>';
        }
    }


    ?>
</body>

</html>