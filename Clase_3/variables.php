<!DOCTYPE html>
<html lang="es"0>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar dos números</title>
</head>
<body>
<?php
$numero_1 = 10;
$numero_2 = 20;
echo "¿Cuál de las dos variables es mayor entre NUMERO_1 y NUMERO_2? <br><br>";
echo "El valor que contiene la variable NUMERO_1 = $numero_1 y NUMERO_2 = $numero_2 <br><br>";
if($numero_1 > $numero_2){
    echo("El número mayor es NUMERO_1 que es igual a ". $numero_1);
}else{
    echo("El número mayor es NUMERO_2 que es igual a ". $numero_2);
}
?>
</body>
</html>