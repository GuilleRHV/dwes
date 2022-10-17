<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion del fichero</title>

</head>
<body>
  <h2>Informacion del fichero</h2>
  <?php

  if(isset($_POST["envio"])){


    echo "Nombre del fichero: " . $_FILES["myfile"]["name"] . "<br>";
    echo "Extension del fichero: " . $_FILES["myfile"]["type"]. "<br>";
    echo "Tamaño del fichero: " . $_FILES["myfile"]["size"]. "<br>";
    echo "Nombre fichero temporal: " . $_FILES["myfile"]["tmp_name"]. "<br>";
    

    $destino = "subidos/".$_FILES["myfile"]["name"];
    // echo $destino;
    // return;
    $flag = move_uploaded_file($_FILES["myfile"]["tmp_name"],$destino);
    
    // var_dump($flag);
    //Se puede hacer con if / else
    echo $flag ? "fichero subido correctamente" : "fallo en la subida";
    if ($flag){
        //subida ok
    }else{
        //subida fallida
    }
}else{
    echo "<p>No has enviado ningun fichero</p>";
  }

?>
</body>
</html>