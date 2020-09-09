<?php

$notes["I"]="insuficient";
$notes["S"]="suficient";
$notes["A"]="aprovat";
$notes["B"]="be";
$notes["N"]="notable";
$notes["E"]="excel·lent";

echo "<b>Primer Recorregut array associatiu</b><br>";
foreach($notes as $valor)
{
       echo $valor."<br>";
}

$notes2 = array("I"=>"insuficient","S"=>"suficient","A"=>"aprovat",
                "B"=>"be","N"=>"Notable","E"=>"Excel�lent");

echo "<b>Segon Recorregut array associatiu</b><br>";
foreach($notes2 as $pos=>$valor)
{
      echo $pos." ". $valor."<br>";
}


?>