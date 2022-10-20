<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="language" action="verificaidioma.php" method="POST"></form>
    <label for="miidioma">Elige idioma preferido</label>
    <select name="idioma" id="">
        <option value="es">español</option>
        <option value="en">ingles</option>
        <option value="al">aleman</option>
    </select>
    <label for="">Elige coche preferido</label>
    <select name="marca" id="">
        <option value="seat">seat</option>
        <option value="aston">aston</option>
        <option value="bmw">bmw</option>
    </select>
    <input type="submit" name="envio" value="enviar datos">
</body>

</html>