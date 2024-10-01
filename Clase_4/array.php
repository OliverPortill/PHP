<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
<h3>Semana y Mes del año.</h3>
<p>-------------------------------</p>
<?php
    $dia[0] = "Domingo";
    $dia[1] = "Lunes";
    $dia[2] = "Martes";
    $dia[3] = "Miercoles";
    $dia[4] = "Jueves";
    $dia[5] = "Viernes";
    $dia[6] = "Sabado";

    $mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    echo "Dia: ".$dia[5]." ///// ";
    echo " Mes: ".$mes[1]."<br>";
?>
<h3>Marcas de autos</h3>
<p>----------------------</p>
<?php
$autos = array("Volvo", "BMW", "Toyota");
$arraylongitud = count($autos);

for($x = 0; $x < $arraylongitud; $x++)
{
    echo "- $autos[$x]";
    echo "<br>";
}
?>
</body>
</html>