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
                if($_COOKIE["idioma"]=="espanya"){
                    echo "¡Bienvenido de vuelta!";
                }
                if($_COOKIE["idioma"]=="ingles"){
                    echo "Welcome back!";
                }
                if($_COOKIE["idioma"]=="aleman"){
                    echo "Willkommen zuruk";
                }

                if($_COOKIE["coches"]!=null){
                echo "<h3>Tus coches favoritos son</h3>";
                
                echo $_COOKIE["coches"] . "<br>";}
            ?>

            <select name="selectoridiomas">
                <option value="espanya" selected>España</option>
                <option value="ingles">Ingles</option>
                <option value="aleman">Aleman</option>

            </select>


        </p>
        <p>Selecciona deportes</p>
        <p>
            <select name="coches[]" multiple=4>
                <option value="audi">audi</option>
                <option value="bmw">bmw</option>
                <option value="opel">opel</option>
                <option value="ford">ford</option>
            </select>
        </p>

        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>
</body>

</html>