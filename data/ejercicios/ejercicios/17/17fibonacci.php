<?php

echo "<h2>Secuencia Fibonacci hasta 1.000.000</h2>";
echo "<table border=1>";
$num = 0;
$n1 = 0;
$n2 = 1;
$aux;
echo "<tr>";
do {
    $aux = $n1;
    $n1 = $n2;
    $n2 = $n1 + $aux;
    if ($n1 < 1000000) {
        echo "<td>", $n1, "</td>";
    }
} while ($n1 < 1000000);

echo "</tr></table>";
