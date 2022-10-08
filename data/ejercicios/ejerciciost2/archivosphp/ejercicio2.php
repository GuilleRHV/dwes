
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nombre=$_GET['nombrepersona'];
    

if(isset($_GET['nombrepersona']) && !empty($_GET['nombrepersona'])){
    
    echo "<br>Hola" . $nombre . " , el nombre existe";
   
}else{
    echo'<br>El nombre no existe';
}



    ?>
</body>
</html>
