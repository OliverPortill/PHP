<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array3</title>
</head>
<body>
    <h3>Productos de una tienda</h3>
    <p>----------------------------------------</p>
    
    <h4>Todos los productos</h4>
    <?php
    $productos = array(
        array("Heladera", 2500000, 18),
        array("Microonda", 1500000, 9),
        array("Cocina", 590000, 21),
        array("Licuadora", 450000, 15),
        array("Mixer", 260000, 5),
        array("Ventilador", 150000, 15),
    );

    // Imprimir todos los productos
    foreach ($productos as $producto) {
        echo "Producto: " . htmlspecialchars($producto[0]) . ", Precio: " . number_format($producto[1], 2, ',', '.') . ", Cantidad: " . htmlspecialchars($producto[2]) . "<br><br>";
    }
    ?>

    <h4>Productos con precio menor a 1,000,000</h4>
    <?php
    // Imprimir productos que cumplen la condición
    foreach ($productos as $producto) {
        if ($producto[1] < 1000000) { 
            echo "Producto: " . htmlspecialchars($producto[0]) . ", Precio: " . number_format($producto[1], 2, ',', '.') . ", Cantidad: " . htmlspecialchars($producto[2]) . "<br><br>";
        }
    }
    ?>
</body>
</html>