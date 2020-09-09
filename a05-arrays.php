<?php

 $nota[0]="Insuficient"; $nota[1]="Suficient"; $nota[2]="Bé"; $nota[]="Notable"; $nota[]="Excel∙lent";

// Si no posem subíndex, automàticament s'assigna la següent

// posició lliure

echo "Qualificació: ". $nota[3]; echo "<br><br>";

// Definició abreujada dels elements d'un array (equivalent a

// l'anterior)

$nota=array("Insuficient","Suficient","Bé","Notable","Excel∙lent"); echo "Qualificació: ". $nota[4];

?>