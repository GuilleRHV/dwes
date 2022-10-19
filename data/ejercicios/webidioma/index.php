<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ejemplo cookies</title>
</head>

<body>
    <h2>Trabajando las cookies</h2>
    <form name="miformu" method="POST" action="cookies.php" onload="comprobarcookies.php">

        <p>

            <?php
                if($_COOKIE["lengua"]=="espanya"){
                    echo "¡Bienvenido de vuelta!";
                }
                if($_COOKIE["lengua"]=="ingles"){
                    echo "Welcome back!";
                }
                if($_COOKIE["lengua"]=="aleman"){
                    echo "Willkommen zuruk";
                }
                echo "<h3>Tus deportes favoritos son</h3>";
                echo $_COOKIE["deportes"] . "<br>";
            ?>

            <select name="selectoridiomas">
                <option value="espanya" selected>España</option>
                <option value="ingles">Ingles</option>
                <option value="aleman">Aleman</option>

            </select>


        </p>
        <p>Selecciona deportes</p>
        <p>
            <select name="deportes[]" multiple=4>
                <option value="futbol">futbol</option>
                <option value="basket">basket</option>
                <option value="tenis">tenis</option>
                <option value="rugby">rugby</option>
            </select>
        </p>

        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>
</body>

</html>