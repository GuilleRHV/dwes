<?php

//Muestra potencias base 2
echo "<h2>Potencias de 2 hasta 2^24</h2>";
echo "<table border=1>";

$num = 0;

echo "<tr>";
do {
    echo "<td>" . pow(2, $num) . "</td>";
    $num++;
} while (pow(2, $num) < pow(2, 24));




echo "</tr></table>";
