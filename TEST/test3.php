<?php
    $personas = array("Ana","Camila","Pepe","Juan","Samantha","Jose");
    $premios = array("Bicicleta","Pileta","Patineta");
    $cantidad = count($personas) - 1;

    foreach($premios as $p){
        while(1){
            $sorteo = rand(0,$cantidad);
            if($personas[$sorteo] != "0"){
                $premiados[$p] = $personas[$sorteo];
                $personas[$sorteo] = "0";
                break;
            }
        }
    }
    echo"Simule un sorteo de premios donde se dispone de una lista de N nombres de
personas y una lista de M premios (donde M<=N). Los premios se sortean según
su orden en la lista, al sortearse un premio se elige aleatoriamente una persona,
la persona y el premio deben ser eliminados de las listas respectivas. A
continuación, ambos deben ser añadidos a una lista de premiados. El proceso
se deberá repetir hasta sortear todos los premios. Al finalizar el sorteo, imprimir
los premiados con su premio correspondiente.<br/>";
    echo "<br/>Ganadores del sorteo <br/>";
    echo "---------------------------------<br/>";
    foreach($premiados as $item => $p){
        print("Premio: ".$item. " Ganador: ".$p);
        echo "<br/>";
    }
    echo "---------------------------------";
    echo "<br/>Participantes que no ganaron: ";
    foreach($personas as $p){
        print (" - ".$p);
    }
?>