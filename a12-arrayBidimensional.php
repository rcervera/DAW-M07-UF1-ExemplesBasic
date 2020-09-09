<?php

$b = array(
    array("hola","avui","plou"),
    array("adeu","dema","potser", "plourà"),
    array("quin","temps!")
);


 // fem servir count i un parell de índexs
for($i=0;$i<count($b);$i++)
{
    for($j=0;$j< count($b[$i]);$j++) {
       echo $b[$i][$j]." ";
    }
    echo "<br>";
}

// fem servir l'estructura foreach
echo "<br>";

foreach($b as $v)
{
      foreach($v as $paraula) {
                echo $paraula." ";
     }
     echo "<br>";
}

echo "<br>Utilitzant la funcio print_r<br>";
print_r($b);

?>
