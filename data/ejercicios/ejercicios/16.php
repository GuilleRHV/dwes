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
    <p>Crea una lista usando etiquetas ul y li. La lista inicialmente estará vacía pero un formulario con un input servirá para añadir los elementos. Usa input de tipo hidden para que no "olvidar" </p>
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

            //Vamos añadiendo los nombres uno a uno y a la vez se recorre el array nombrepersonas (y a la vez mostrandose por pantalla)
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