<?php

$nota["I"]="Insuficient"; $nota["S"]="Suficient"; $nota["B"]="Bé"; $nota["N"]="Notable"; $nota["E"]="Excel∙lent";

echo "Valors assignats directament <br>";

echo "Qualificació: ". $nota["B"];

echo "<br><br>";

// Definició abreujada dels element d'un array associatiu

$nota=array("I"=>"Insuficient","S"=>"Suficient","B"=>"Bé", "N"=>"Notable","E"=>"Excel∙lent");

echo "Definició abreujada d'elements <br>";

echo "Qualificació: ".$nota["E"];

?>