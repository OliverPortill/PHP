<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array2</title>
</head>
<body>
    <h3>Edades del personal</h3>
    <p>-------------------------------</p>
<?php
$edades = array("Moises" => "33", "Camila" => "25", "Samanta" => 17);
    echo "- Camila tiene ".$edades['Camila']. " años.<br>";
    echo "- Moises tiene ".$edades['Moises']. " años.<br>";
    echo "- Samanta tiene ".$edades['Samanta']. " años.<br>";

    echo "<br> Claves y valores asignados. <br><br>------------------------------------<br><br>";
    foreach($edades as $x => $valor)
    {
        echo "- Clave = ".$x. ", valor = ".$valor;
        echo "<br>";
    }
?>
</body>
</html>