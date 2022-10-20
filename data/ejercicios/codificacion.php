<?php

//Serialize, unserialize, json_encode, json_decode

$capitales=[
    "españa"=>"madrid",
    "francia"=>"paris"
];

 $infotrans=""; //Informacion transformada
 $infonotrans="";//Informacion de vuelta a la original
$infotrans=serialize($capitales);
echo "<h4>Informacion serializada:</h4>";
var_dump($infotrans);
$infonotrans=unserialize($infonotrans);
echo "<h4>Informacion desserializada:</h4>";
var_dump($infonotrans);


$infotrans = json_encode($capitales);
echo "<h4>informacion en json</h4>";
var_dump($infotrans);


$infonotrans = json_decode($infotrans);
echo "<h4>informacion original desde json</h4>";
var_dump($infonotrans);