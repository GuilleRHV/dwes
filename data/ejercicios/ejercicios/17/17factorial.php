<?php

$num = 1;
$cont = 1;
echo "<h2>Factorial hasta 1.000.000</h2>";
echo "<table border=1><tr>";
do {

    $num = $num * $cont;
    if ($num < 1000000) {
        echo "<td>" . $num . "</td>";
        $cont += 1;
    }
} while ($num < 1000000);
echo "</tr></table>";
