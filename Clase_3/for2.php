<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares o impares</title>
    <style>
        .estilo_par{
            color:red
        }
        .estilo_impar{
            color:green
        }
    </style>
</head>
<body>
<?php
echo "Números pares(rojo) e impares(verde) <br>-----------------------------------------------<br>";
for($x = 1 ; $x <= 100 ; $x++){
    if($x  % 2 == 0){
        echo "<p class='estilo_par'> $x </p>";
    }else{
        echo "<p class='estilo_impar'> $x </p>";
    }
}
?>
</body>
</html>