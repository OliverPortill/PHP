<?php
    include 'conexion.php';
    if($conn->connect_errno){
        echo "Error de conexión.";
    }else{
        $sql = "select * from usuario";
        $resultado = $conn->query($sql);
        
        if($resultado->num_rows > 0){
            while($r = $resultado->fetch_assoc()){
                echo "- ".$r['Nickname']. "<br>";
                echo "- ".$r['Email']. "<br>";
            }
        }else{
            echo "Nada que mostrar :(";
        }

    }
?>