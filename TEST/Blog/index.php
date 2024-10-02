<?php
session_start();
include 'conexion.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mensaje'])) {
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $mensaje = $_POST['mensaje'];

        $stmt = $pdo->prepare("INSERT INTO mensajes (usuario, mensaje) VALUES (:usuario, :mensaje)");
        $stmt->execute(['usuario' => $usuario, 'mensaje' => $mensaje]);


        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
if (isset($_POST['nombre_usuario'])) {
    $_SESSION['usuario'] = htmlspecialchars($_POST['nombre_usuario']);
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$stmt = $pdo->query("SELECT * FROM mensajes ORDER BY fecha DESC");
$mensajes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Mensajes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Blog de Mensajes</h1>

    <?php if (!isset($_SESSION['usuario'])): ?>
        <form method="post" class="login-form">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" name="nombre_usuario" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    <?php else: ?>
        <p>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</p>
        <form method="post">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" required></textarea>
            <button type="submit">Enviar Mensaje</button>
        </form>
        <form method="post">
            <button type="submit" name="logout">Cerrar Sesión</button>
        </form>

        <h2>Mensajes</h2>
        <div id="mensajes">
            <?php foreach ($mensajes as $msg): ?>
                <div class="mensaje">
                    <strong><?php echo htmlspecialchars($msg['usuario']); ?>:</strong>
                    <p><?php echo htmlspecialchars($msg['mensaje']); ?></p>
                    <small><?php echo $msg['fecha']; ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <button onclick="location.reload();">Refrescar</button>
</body>
</html>