<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Ejercicio 15 </h1>
    <h2>Array nombres</h2>
    <form name="miformu" method="GET">
        <p>
            <label for="nombre">Introduce nombre 1</label>
            <input type="text" name="nombres[]" id="nombrepersonas">

        </p>
        <p>
            <label for="nombre">Introduce nombre 2</label>
            <input type="text" name="nombres[]" id="nombrepersonas">

        </p>
        <p>
            <label for="nombre">Introduce nombre 3</label>
            <input type="text" name="nombres[]" id="nombrepersonas">

        </p>
        
        <input type="submit" name="envio" id="envio" value="Enviar">
        </form>

        <?php


if(isset($_GET["envio"])){
    $array = $_GET["nombres"];
    if(!empty($array)){
       foreach($array as $elemento){
            echo "Nombre: " . $elemento . "<br>";
        }
       // print_r($array);
    }else{
        echo "La lista esta vacia";
    }
}
?>
</body>
</html>