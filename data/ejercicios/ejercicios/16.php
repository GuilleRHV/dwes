<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>

<body>

    <h1>Ejercicio 16</h1>
    <h2>Añadir a una lista</h2>
    <form name="miformu" method="GET">
        <p>
            <label for="nombre">Añade elemento</label>
            <input type="text" name="nombrepersonas[]">

        </p>

        <input type="submit" name="envio" id="envio" value="Añadir">
        <ul>
            <?php
            //Si en form quisieramos pagina externa añadimos action="archivosphp/ejercicio2.php"


            if (isset($_GET['nombrepersonas'])) {
                foreach ($_GET['nombrepersonas'] as $persona) {
                    //Se puede poner type="hidden" para no "olvidarlo"
                    echo '<li><input type="hidden" name="nombrepersonas[]" value="' . $persona . '"></li>';
                }
            }

            ?>
        </ul>
    </form>


</body>

</html>