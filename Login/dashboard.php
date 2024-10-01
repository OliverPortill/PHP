<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Sesión abierta</h2>
    <p>
    <?php
    if(isset($_POST['nombre']))
    {
        $_SESSION['nombre'] = $_POST['nombre'];
        echo "Bienvenido: <br> ".$_POST['nombre']. "</br>";
    }else{
        if(isset($_SESSION['nombre']))
        {
            echo "Has iniciado Sesión como: ". $_SESSION['nombre'];
        }else{
            echo "Acceso Restringido.";
        }
    }
    ?></p>
    <br>
    <p><a href="login.php">Ir a la página Inicial.</a></p>
    <br>
    <p><a href="logout.php">Cerrar sesión.</a></p>
</body>
</html>