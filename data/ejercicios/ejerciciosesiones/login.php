
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 18</h1>
    <h2>App</h2>
    <form name="miformu" method="POST">
        <p>
            <label for="nombre">Inicia sesion</label>
            <p>Usuario</p>
            <input type="text" name="usuario"><br>
            <input type="password" name="password"><br>
           

        </p>
        
        <input type="submit" name="envio" id="envio" value="Añadir">
        <?php
        if(isset($_POST["envio"])){
        if(($_POST["nombre"]=="usuario" && $_POST["password"]=1234) || ($_POST["nombre"]=="admin" && $_POST["password"]=4567)){
            session_start();
            $_SESSION["usuario"]=$_POST["usuario"];
        }else{
            echo "usuario incorrecto";
        }}
        ?>

    </form>

</body>

</html>