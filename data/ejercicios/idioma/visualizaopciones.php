<?php

//si existen cookies
if (isset($_COOKIE["idioma"]) && isset($_COOKIE["marca"])) {
    $idioma = $_COOKIE["idioma"];
    $marca = $_COOKIE["marca"];


    $mensajeidio = "";
    $mensajecoche = "";
    switch ($_idioma) {
        case "es":
            $mensajeidio = "Bienvenido";
            $mensajecoche = "Tu marca de coche es :";
            break;
        case "en":
            $mensajeidio = "Hello";
            $mensajecoche = "Your favourite car brand is :";

            break;
        case "al":
            $mensajeidio = "Willkommen lieber Benutzer";
            $mensajecoche = "Ihre Lieblingsautomarke ist:";
            break;
        default:
            $mensajeidio = "Bienvenido";
            $mensajecoche = "Tu marca de coche es :";
            break;
    }
    $mensajecoche=$mensajecoche . $marca;
    echo "<h2> ". $mensajeidio . "</h2>";
    echo "<h2> ". $mensajecoche . "</h2>";
}else{
    //Si no existen cookies
    setcookie("idioma","",time()-200);
    setcookie("marca","",time()-200);
    echo "<h3>Debe seleccionar algunos datos</h3>";
    echo "<a href=\"idioma.html\"> Volver al inicio </a>";

}
