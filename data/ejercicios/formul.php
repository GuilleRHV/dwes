
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario credenciales</h1>
    <form name="miformu" action="autoriza.php" method="GET">
        <p>
            <label for="nombre">introduce nombre</label>
            <input type="text" name="nombreusu" id="nombreusu">

        </p>
        <p>
            <label for="password">Introduce contraseña</label>
            <input type="password" name="passwd" id="passwd">
        </p>
        <p>Elige tu modulo</p>
            <label for="asignatura1">PHP</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP">
            <label for="asignatura2">Java</label>
            <input type="checkbox" name="asignaturas[]" id="asignatura2" value="Java">
            
            <p>Elige baloncesto</p>
            <p>
                <label for="equipo1">Real Zaragoza</label>
                <input type="radio" name="equipo" id="equipo1" value="Real Zaragoza">
                <label for="equipo2">Real Madrid</label>
                <input type="radio" name="equipo" id="equipo2" value="Real Madrid">
            </p>
            <p>Elige tu plato favorito</p>
            <label for="plato1">Codillo asado</label>
            <p>
            <select name="menus" id="menus">
                <option value="codillo">Codillo asado</option>
                <option value="ensaladad">Ensalada cesar</option>
                <option value="pizza">Pizza</option>
                <option value="macarrones">Macarrones</option>
            </select>
            </p>
            <p>Varias opciones</p>
            <p>
            <select name="menusm[]" id="menus" multiple=2 required>
                <option value="codillo">Codillo asado</option>
                <option value="ensaladad">Ensalada cesar</option>
                <option value="pizza">Pizza</option>
                <option value="macarrones">Macarrones</option>
            </select>
            </p>

            <input type="hidden" name="ip" value="<?=$_SERVER['SERVER_ADDR']?>">
        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>
   
</body>
</html>