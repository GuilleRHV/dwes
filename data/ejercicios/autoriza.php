<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de credenciales</h1>
    <?php



//If isset($_GET['envio]){}
    if(isset($_GET['nombreusu']) && !empty($_GET['nombreusu'])){
        $usuario =$_GET['nombreusu'];
        echo "<br>Usuario introducido : " . $usuario;
    }else{
        echo'<br><h3>No has introducido ningun usuario</h3>';
    }

    echo "<br>El nombre del usuario es: " . $_GET['nombreusu'];
    echo "<br>La password es: " . $_GET['passwd'];

//Recogida valores checkbox
    if(isset($_GET['envio'])){
        if(!empty($_GET['asignaturas'])){
            $asignaturas = $_GET['asignaturas'];

foreach($asignaturas as $asignatura){
    echo "<br>Te encanta el modulo " . $asignatura;
}
        
        }
    }

    ?>
</body>
</html>