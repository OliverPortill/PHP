<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Temperatura</title>
</head>
<body>
<?php
$temperatura = 0;
while($temperatura <= 100)
{
    $red = min(255, max(0, ($temperatura * 2.55)));
    $blue = min(255, max(0, 255 - ($temperatura * 2.55)));
    echo "La temperatura es: <div style='color: rgb($red, 0, $blue);'> $temperatura &deg;C</div>";
    $temperatura++;
}
?>
</body>
</html>