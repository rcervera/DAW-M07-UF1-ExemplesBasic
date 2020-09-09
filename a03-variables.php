<?php

// definició de variables

$nom = "Marta"; // variables de text o cadena (String)

$cognom1 = "Salelles";

$cognom2 = "Ballarà";

$edat = 37; // variable numèrica (Integer)



$poblacio = "Sabadell";

// Inserció de les variables dins la cadena

echo "El teu nom és: $nom <br> \n";
echo "Els teus cognoms són: $cognom1 i $cognom2 <br> \n";

$edat = $edat + 3;

echo "Tens $edat anys <br> \n";

echo "Vius a $poblacio <br> \n";

echo 'Vius a $poblacio <br> \n'; 


// tipus de variables

// String
echo "<br>String";
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

// integer
echo "<br>Integer<br>";
$x = 5985;
echo $x;


// float
echo "<br>Float<br>";
$x = 10.365;
echo $x;

// boolean
$x = true;
$y = false;

// altres: array, object

// A variable of data type NULL is a variable that has no value assigned to it.

$x = null;

?>

