<!DOCTYPE html>
<html lang="es"0>
<head>
    <meta charset="UTF-8">
    <title>Colores</title>
</head>
<body>
<?php
echo "Botón de colores <br>-------------------<br>";
$red = 0;
$green = 0;
$blue = 0;
while($red < 256){
    while($green < 256){
        while($blue  < 256){
            print("<button style='background-color:rgb($red,$green,$blue)'>color($red,$green,$blue)</button>");
            $blue+= 10;
        }
        $green+= 10;
        $blue = 0;
    }
    $red+= 10;
    $green = 0;
}
?>
</body>
</html>