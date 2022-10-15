<?php

include "17.php";

$n1=0;
$n2=1;
$aux;
echo "<table border=1>";

echo "<tr>";
echo "<td>0</td>";
$num=0;

    
    do{  
        $aux=$n1;
        $n1=$n2;
        $n2=$n1+$aux;
    if($n1<1000000){
        echo "<tr><td>", $n1, "</td></tr>";
    }
    }while($n1<1000000);   
    

    

echo "</table>";
