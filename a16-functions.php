<?php

        function superar($nota)
        {
            if ($nota >= 5) {
                return "Aprovat";
            } else {
                return "Suspès";
            }
        }

        function doble(&$numero)
        {
            $numero = $numero * 2;
        }

        function feriogur($sabor, $tipus = "bifidus")
        {
            return "Fer un iogur $tipus de $sabor.\n";
        }
        
    // Per valor 
    echo "<b>Crida a la funció superar amb valor 4</b><br>";
    $n  = 4;
    echo superar($n)."<br>";
    echo "<b>Crida a la funció superar amb valor 9</b><br>";
    $n  = 9;
    echo superar($n)."<br>";

    // per referència
    $num = 3;
    echo "<b>Crida a la funció doble per referència de la "
    . "variable \$num amb valor $num</b><br>";
    doble($num);
    echo $num."<br>";    

    // paràmetres per defecte
    echo "<b>Crida a la funció feiogurt amb tots els paràmetres</b><br>";
    echo feriogur("maduixa","normal")."<br>";
    echo "<b>Crida a la funció feiogurt on manca paràmetre per defecte</b><br>";
    echo feriogur("maduixa");   
?>
