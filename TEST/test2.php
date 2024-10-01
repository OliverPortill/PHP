<?php
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre");

    $fecha = date("Y-m-d");
    $dia = date("d");
    $mes = date("m") - 1;
    $anio = date("Y");
    
    echo "<br/>Cree un array con los meses del año en letras e implemente un programa que
    imprima la fecha en el formato de día – mes en letras – año. Ejemplo: 8 de agosto
    de 1988<br/><br/>";

    print("Hoy es: ".$dia." de ".$meses[$mes]." del ".$anio);
?>