<html>
<head>
    <title>Ejemplo de operadores Lógicos</title>
</head>
<body>
<h1>Ejemplo de operaciones lógicas en PHP</h1>

<?php
$a = 8;
$b = 3;
$c = 3;

echo "\$a = $a<br>";
echo "\$b = $b<br>";
echo "\$c = $c<br><br>";

echo "1) (\$a == \$b) && (\$c > \$b) → ";
echo ($a == $b && $c > $b) ? "Verdadero<br>" : "Falso<br>";

echo "2) (\$a == \$b) || (\$b == \$c) → ";
echo ($a == $b || $b == $c) ? "Verdadero<br>" : "Falso<br>";

echo "3) !(\$b <= \$c) → ";
echo (!($b <= $c)) ? "Verdadero<br>" : "Falso<br>";
?>

</body>
</html>
