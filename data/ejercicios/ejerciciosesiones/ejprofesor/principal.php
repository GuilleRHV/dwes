<?php

session_start();
echo "<h2>Bienvenido usuario: " . $_SESSION["usuario"] . " de rol: " . $_SESSION["rol"] . "</h2>";