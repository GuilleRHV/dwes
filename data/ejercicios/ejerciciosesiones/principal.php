<?php
session_start();
echo "Hola ". $_SESSION["usuario"];
echo "<a href=\"Logout.php\">Logout</a>";