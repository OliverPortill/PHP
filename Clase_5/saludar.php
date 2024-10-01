<?php
if(isset($_GET['nombre']))
{
    $nombre = $_GET['nombre'];

    if(!empty($nombre))
    {
        print("Hola $nombre.");
    }else{
        print("Hola invitado.");
    }
}else{
    echo "No existe ningún dato cargado.";
}
?>