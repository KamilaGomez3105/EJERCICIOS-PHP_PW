<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo Integrado en PHP</title>
</head>
<body>
    <?php
    // Declaración de variables
    $nombre = "Kamila";
    $edad = 20;
    $cursos = ["PHP", "JavaScript", "HTML", "CSS"];

    // Salida inicial
    echo "<h1>¡Hola, $nombre!</h1>";
    echo "<p>Tienes $edad años, y estás aprendiendo lo siguiente:</p>";

    // Recorrer el array de cursos
    echo "<ul>";
    foreach ($cursos as $curso) {
        echo "<li>$curso</li>";
    }
    echo "</ul>";

    // Operaciones matemáticas
    $a = 10;
    $b = 3;
    $resultado = $a + $b;
    echo "<p>¿Sabías que $a + $b = $resultado? Vamos a realizar más cálculos:</p>";
    echo "<p>$a - $b = " . ($a - $b) . "</p>";
    echo "<p>$a * $b = " . ($a * $b) . "</p>";
    echo "<p>$a / $b = " . number_format($a / $b, 2) . "</p>";

    // Condición simple
    if ($edad >= 18) {
        echo "<p>Eres mayor de edad, ¡puedes tomar decisiones importantes!</p>";
    } else {
        echo "<p>Aún eres menor de edad, ¡disfruta cada momento mientras aprendes!</p>";
    }

    // Función personalizada
    function calcularAreaCirculo($radio) {
        $pi = 3.1416;
        return $pi * $radio * $radio;
    }
    $radio = 5;
    echo "<p>El área de un círculo con radio $radio es " . calcularAreaCirculo($radio) . ".</p>";

    // Bucle básico
    echo "<p>Contemos del 1 al 5:</p>";
    for ($i = 1; $i <= 5; $i++) {
        echo "$i ";
    }

    // Despedida
    echo "<p>Espero que este ejemplo te haya servido para aprender un poco más sobre PHP. ¡Sigue practicando!</p>";
    ?>
</body>
</html>