<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Math</title>
</head>
<body>
    <h3>Valores matemáticos</h3>
<?php
    echo "1) ".(pi());
    echo "<br>";
    echo "2) ".(min(0, 150, 30, 20, -8, -200));
    echo "<br>";
    echo "3) ".(max(0, 150, 30, 20, -8, -200));
    echo "<br>";
    echo "4) ".(abs(-6.7));
    echo "<br>";
    echo "5) ".(sqrt(64));
    echo "<br>";
    echo "6) ".(round(0.60));
    echo "<br>";
    echo "7) ".(round(0.49));
    echo "<br>";
    echo "8) ".(rand());
    echo "<br>";
    echo "9) ".(rand(10, 100));
?>
</body>
</html>