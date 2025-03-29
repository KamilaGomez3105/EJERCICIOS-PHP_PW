<html>
<head>
  <title>Generar un número aleatorio</title>
</head>
<body>
  <h1>Número Aleatorio</h1>
  <p>
    <?php
    // Generar un número aleatorio entre 1 y 100
    $num = rand(1, 100);

    // Mostrar el número generado
    echo "El número generado es: $num<br>";

    // Corregir la lógica de comparación
    if ($num < 50) {
      echo "El número es menor a 50.";
    } elseif ($num == 50) {
      echo "El número es igual a 50.";
    } else {
      echo "El número es mayor a 50.";
    }
    ?>
  </p>
</body>
</html>

