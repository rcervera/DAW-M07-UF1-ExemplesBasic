<?php
// Es mostrarà els números divisibles per $div fins $total
// Definim les tres variables que necessitem amb el seu valor

$i = 0;//variable de control del while
$div = 13; //número a dividir (divisor)
$total = 100; //total a considerar (fins a quant) (dividend)

echo "<h2>Números divisibles per $div (fins a $total)</h2>";
// Iniciem el while amb $i = 0 i per tant hi entrarem

// mentre $i sigui més petit que $total
while ($i <= $total){

   //Si és divisible entre $div, l'escriurem
   if ($i%$div == 0 )
   {
        echo $i." ­ ";
   }

  //Incrementem $i; si no ho féssim, no s'acabaria mai el while
  //i podria provocar un problema en el sistema !!!
   $i++;
   
}

?>

