<html>
<head>
  <title>Número Aleatorio en Español</title>
</head>
<body>
  <h1>Número Aleatorio en Español</h1>
  <p>
    <?php
    // Generar un número aleatorio entre 1 y 5
    $numero = rand(1, 5);

    // Asignar el número en español según el valor generado
    if ($numero == 1) {
      echo "El número generado es: uno";
    } elseif ($numero == 2) {
      echo "El número generado es: dos";
    } elseif ($numero == 3) {
      echo "El número generado es: tres";
    } elseif ($numero == 4) {
      echo "El número generado es: cuatro";
    } elseif ($numero == 5) {
      echo "El número generado es: cinco";
    }
    ?>
  </p>
</body>
</html>
