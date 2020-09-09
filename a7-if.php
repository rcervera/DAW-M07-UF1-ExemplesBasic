<html>
<head>
        <title>Exemple Condicionals</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php

echo "<h1>Ara són les " . date("H:i:s") . " hores.</h1>";

$hora24 = date("H");
$dia = date("w"); // 0 és diumenge



if($dia >=1 && $dia <=5) {
    if ($hora24 < "8") {
        echo "Ja t'has llevat??";
    } elseif ($hora24 < "15") {
        echo "Estás a classe?";
    } else {
        echo "Estás fent la FCT o estudiant?!";
    }
}
else "És cap de setmana"
?>
</body>
</html>