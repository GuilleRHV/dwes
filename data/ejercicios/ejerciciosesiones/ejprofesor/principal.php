<?php

session_start();
if(!isset($_SESSION["loginok"])){
    header("Location: login.php");
}
var_dump($_SESSION["loginok"]);
echo "<h2>Bienvenido usuario: " . $_SESSION["loginok"]["nombreusu"] . " de rol: " . $_SESSION["loginok"]["rol"] . "</h2>";
echo "<a href=\"logout.php\">Cerrar sesion</a>";