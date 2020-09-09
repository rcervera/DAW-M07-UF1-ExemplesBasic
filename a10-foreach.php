<?php
// Definim un array amb el dies de la setmana
$dia[0] = "dilluns";$dia[1] = "dimarts"; $dia[2] = "dimecres"; $dia[3] = "dijous"; $dia[4] = "divendres"; $dia[5] = "dissabte"; $dia[6] = "diumenge";

// Mostrem els noms dels dies de la setmana
echo "<b>Els dies de la setmana són:</b><br><br>\n";

// recorrem un array amb un while
$i=0;
while($i<count($dia)) {
    echo $dia[$i]." ";
    $i++;
}
echo "<br>";

// recorrem array amb un for
for($i=0;$i<count($dia);$i++) {
      echo $dia[$i]." ";
}
echo "<br>";

// Recorrem l'array amb foreach
foreach ($dia as $valor) {
    //a cada passada llegeix el nou valor
    echo $valor." ";
}

?>

