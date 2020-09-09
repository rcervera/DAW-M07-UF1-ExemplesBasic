<?php

$fruites = array(
    'taronja' => array(
        'propietat' => 'sucosa',
        'color' => 'taronja',
        'sabor' => 'dolç'
    ),
    'llimona' => array(
        'propietat' => 'sucosa',
        'color' => 'groga',
        'sabor' => 'cítric'
    )
);

// mostrem 2 valors en concret
echo "<br>".$fruites['taronja']['sabor']." ";
echo $fruites['llimona']['sabor'];

// mostrem tot el contingut de forma ràpida
print_r($fruites);

// mostem el contingut de posicions i valors en format propi
foreach($fruites as $nom => $f)
{
    echo $nom.": ";
    foreach($f as $prop => $caracteristica) {
        echo $prop." es " . $caracteristica." ";
    }
    echo "<br>";

}

