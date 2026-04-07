<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name= "formulario" action="013-php-foreach-post-get.php" method="POST">
        Introduce tu nombre: <input type="text" name="nombre"><br>
        Introduce tu edad: <input type="text" name="edad"><br>
        <input type="submit" value="Enviar">
        </form>
        
        <?php
        if($_POST)
            {
                foreach($_POST as $clave => $valor)
                {
                    echo "El valor de $clave es: $valor <br>";
                }
            }
        ?>
</body>
</html>