<?php
//Nombre de la maquina
$mihost = $_SERVER['HTTP_HOST'];
echo 'El hosts al que le va la peticion es ' . $mihost;

/*Mostrar aqui:
    -el nombre del servidor web
    - el lenguaje 
    - el nombre de la pagina actual que realiza la solicitud
    - el tipo de navegaro que realiza la solicitud
*/
$lenguaje = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo '<br>El lenguaje es: ' . $lenguaje;
$pagina_solicitud=$_SERVER['PHP_SELF'];
echo '<br>El nombre de la pagina actual que realiza la solicitud ' . $pagina_solicitud;

$navegador = $_SERVER['HTTP_USER_AGENT'];
echo '<br>el tipo de navegador que realiza la solicitud ' . $navegador;