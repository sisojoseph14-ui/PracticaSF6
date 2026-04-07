<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$xml = simplexml_load_file("NOMBREXML.xml");

foreach ($xml->color as $color) {
    echo "El color: " . $color->nombre . 
         " tiene el código hexadecimal: " . 
         $color->codigo_hexadecimal . "<br>";
}
?>

</body>
</html>