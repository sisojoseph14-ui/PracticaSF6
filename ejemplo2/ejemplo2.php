<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $equipo = array("Portero" => 'Cech', 'Defensa' => 'Terry', "Medio" => 'Lampard', "Delantero" => 'Torres');
    foreach($equipo as $posicion => $jugador)
    {
        echo " El " . $posicion . " es " . $jugador . "<br>";
    }
    ?>
</body>
</html>