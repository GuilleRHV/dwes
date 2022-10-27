<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["envio"])){
        session_start();
        $item=$_POST["lista"];
        $_SESSION["listadeseo"][]=$item;
        $sesioncodif=json_encode($_SESSION["listadeseo"]);
        var_dump($sesioncodif);
        echo "<br>";
        //OPCION 1: decodificar
        $sesioncodif = json_decode($sesioncodif,true);
        var_dump($sesioncodif);
        echo "<br>";
        //OPCION 2: decodificarlo como un objeto
        $sesioncodif = json_decode($sesioncodif);
        //CAMBIAR EL ELEMENTO 2 A PIZARRA


       
        

    }//if_post

}//if_server
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista deseos</h1>
    <h3>Hoy me apetece comprar</h3>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>' name="" method="POST">
    <select name="lista" id="" required>
        <option value="camisa">camisa</option>
        <option value="tijeras">tijeras</option>
        <option value="consola">PS5</option>
        <option value="pantalon">pantalon</option>
        <option value="coche">coche</option>
        <option value="cuaderno">cuaderno</option>
        <option value="una piedra">una piedra</option>
    <input type="submit" name="envio" value="Agregar envio">
    </select>
    </form>
</body>
</html>