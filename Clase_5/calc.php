<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <form method="GET" action="operar.php">
    <input type="number" name="n1">
    <input type="number" name="n2">
    <select name="operacion">
        <option value="s">Sumar</option>
        <option value="r">Restar</option>
        <option value="m">Multiplicar</option>
        <option value="d">Dividir</option>
    </select>
    <button type="submit">=</button>
    </form>
    <h4>
        <?php
        if(!empty($_GET['m']))
        {
            $result = $_GET['m'];
        }else{
            $result = 0;
        }
        echo "El resultado es: $result";
        ?>
    </h4>
</body>
</html>