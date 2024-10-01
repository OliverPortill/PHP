<h3>Operadores aritméticos</h3>
<?php
$a = 8;
$b = 3;
echo "El valor que contiene la variable a = $a";
echo ", y el valor de la variable b = $b", "<br><br>";
echo "La suma de dichos números es: ", $a + $b, "<br> ";
echo "La resta de dichos números es: ", $a - $b, "<br> ";
echo "La multiplicación de dichos números es: ", $a * $b, "<br> ";
echo "La división de dichos números es: ", $a / $b, "<br> ";
$a++;
echo "El valor de la variable a + 1 es: ", $a, "<br>";
$b--;
echo "El valor de la variable b - 1 es: ", $b, "<br>";
?>
<h3>Operaiones de comparación</h3>
<?php
$a = 8;
$b = 3;
$c = 3;
echo "El valor que contiene la variable a = $a, la de b = $b y el de c = $c <br><br>";
echo "Los valores falsos corresponde con '||' y los verdaderos con '|1|': <br>";
echo "'a' es igual a 'b': |", $a == $b, "|<br>";
echo "'a' es distinto a 'b': |", $a != $b, "|<br>";
echo "'a' es menor que 'b': |", $a < $b, "|<br>";
echo "'a' es mayor que 'b': |", $a > $b, "|<br>";
echo "'a' es mayor o igual que 'c': |", $a >= $c, "|<br>";
echo "'a' es menor o igual que 'c': |", $a <= $c, "|<br>";
?>
<h3>Operaiones lógicos</h3>
<?php
echo "Los valores falsos corresponde con '||' y los verdaderos con '|1|': <br>";
$a = 8;
$b = 3;
$c = 3;
echo "'a' es igual a 'b' y 'c' es mayor que 'b': |", ($a == $b) && ($c > $b), "|<br>";
echo "'a' es igual a 'b' o 'b' es igual que 'c': |", ($a == $b) || ($b == $c), "|<br>";
echo "'b' es menor o igual a 'c': |", !($b <= $c), "|<br>";
?>