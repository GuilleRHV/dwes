<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>

    <h1>Ejercicio 12</h1>
    <p> Crea un formulario para enviar campo nombre. Si el nombre existe se da un saludo.
        Si no existe se vuelve atrás indicando que el campo es obligatorio. </p>
    <h2>Formulario nombre</h2>
    <form name="miformu" method="GET">
        <p>
            <label for="nombre">introduce nombre</label>
            <input type="text" name="nombrepersona" id="nombrepersona">

        </p>

        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>

    <?php
    //Si en form quisieramos pagina externa añadimos action="archivosphp/ejercicio2.php"
    $nombre = $_GET['nombrepersona'];

    if (isset($_GET['nombrepersona'])) {
        if (!empty($_GET['nombrepersona'])) {
            echo "<br>Hola " . $nombre . " , el nombre existe";
        } else {
            echo '<br>El campo nombre es obligatorio';
        }
    }
    ?>
</body>

</html>