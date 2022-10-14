<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php


$nombre="Guillermo";
$apellidos="Rodriguez Huguet";
$edad=22;
$telefono=123456789;
$email="nombre@gmail.com";


?>
<h1>Ejercicio 1</h1>
<!--Con print-->
<h2>Con print</h2>
<table>
<tr>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>edad</td>
    <td>telefono</td>
    <td>email</td>
</tr>
<tr>
    <td><?php print($nombre);?></td>
    <td><?php print($apellidos);?></td>
    <td><?php print($edad);?></td>
    <td><?php print($telefono);?></td>
    <td><?php print($email);?></td>
</tr>

<!--Con echo-->

</table>
<h2>Con echo</h2>
<table>
<tr>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>edad</td>
    <td>telefono</td>
    <td>email</td>
</tr>
<tr>
    <td><?php echo($nombre);?></td>
    <td><?php echo($apellidos);?></td>
    <td><?php echo($edad);?></td>
    <td><?php echo($telefono);?></td>
    <td><?php echo($email);?></td>
</tr>
</table>
<!--Concatenar ()-->
<?php
$apellidoconcatenado="Rodriguez ";
$apellidoconcatenado.="Huguet";
?>
<h2>Concatenando, comillas dobles y simples</h2>
<table>
<tr>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>edad</td>
    <td>telefono</td>
    <td>email</td>
</tr>
<tr>
    <td><?php echo($nombre);?></td>
    <td><?php echo($apellidoconcatenado);?></td>
    <td><?php echo($edad);?></td>
    <td><?php echo($telefono);?></td>
    <td><?php echo($email);?></td>
</tr>
</table>


</body>
</html>