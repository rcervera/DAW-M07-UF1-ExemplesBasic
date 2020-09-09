<?php

$num = 8; //definim variable
// Iniciem for:
// $i, valdrà en començar, 0
// la condició d'execució és que $i ha de ser diferent a $num
// a cada passada incrementem $i en 1 ($i++)

for($i=0; $i != $num ; $i++)
{
echo "\$num és diferent de ".$i."<br>";

}
// S'ha acabat l'execució del for perquè $i ja no era dif. de $num

echo "<br><br>";
echo "Hem sortit del for <br>";
echo "perquè \$num ($num) ja no era diferent de \$i ($i)";

?>

