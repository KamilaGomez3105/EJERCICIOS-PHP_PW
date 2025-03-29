<html>

<head>
    <title>Ejemplo de Operadores de Comparación</title>
</head>

<body>
    <h1>Ejemplo de Operaciones de Comparación en PHP</h1>
    <?php
    $a = 8;
    $b = 3;
    $c = 8;

    echo "$a == $b " . ($a == $b ? "True" : "False") . "<br>";
    echo "$a != $b " . ($a != $b ? "True" : "False") . "<br>";
    echo "$a < $b " . ($a < $b ? "True" : "False") . "<br>";
    echo "$a > $b " . ($a > $b ? "True" : "False") . "<br>";
    echo "$a >= $c " . ($a >= $c ? "True" : "False") . "<br>";
    echo "$a <= $c " . ($a <= $c ? "True" : "False") . "<br>";
    ?>
</body>

</html>