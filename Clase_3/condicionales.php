<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
<?php
$edad = 14;
echo "El valor que contiene la variable de edad es: $edad años<br><br>";
if($edad >= 18 && $edad <= 80){
    echo "Eres mayor de edad. ";
}else if($edad >= 11 && $edad < 18){
    echo "Eres menor de edad. ";
}else{
    echo "Algo anda mal :(";
}
?>
</body>
</html>