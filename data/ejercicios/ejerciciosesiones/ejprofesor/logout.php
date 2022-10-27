<?php

session_start();
$_SESSION=array();
session_destroy();
setcookie(session_name(),"",time()-72000,"/");

header("Location: login.php");
//echo "<a href=\"logout.php\">Pagina login</a>";