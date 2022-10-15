<?php

include "17.php";

$n1=0;
$n2=1;
$aux;
echo "<table border=1>";

$num=0;

    
    do{
        echo "<tr><td>". 2^$num ."</td></tr>";
        $num++;
    }while($num<2^24);
    

    

echo "</table>";
