<?php
    if(isset($_POST)){

        $autor = $_POST['autor'];
        $nombre = $_POST['nombre'];
        $genero_id = $_POST['genero_id'];
        $nickname = 'oliver';
    }
?>
<?php
    include "conexion.php";

    $sql_insertar ="INSERT into cancion values(default, '$autor', '$nombre', '$nickname', '$genero_id');";
    $sql_insertar= "INSERT INTO genero (descripcion) VALUES ('Nuevo Género');";

    $conn->query($sql_insertar);

    header("Location: //dashboard.php");
    exit;
?>