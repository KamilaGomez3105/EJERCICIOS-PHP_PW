<html>
<head>
  <title>Tabla de Multiplicar del 2</title>
</head>
<body>
  <h1>Tabla de Multiplicar del 2</h1>
  
  <h2>Usando For</h2>
  <p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo "2 x $i = " . (2 * $i) . "<br>";
    }
    ?>
  </p>

  <h2>Usando While</h2>
  <p>
    <?php
    $i = 1;
    while ($i <= 10) {
      echo "2 x $i = " . (2 * $i) . "<br>";
      $i++;
    }
    ?>
  </p>

  <h2>Usando Do/While</h2>
  <p>
    <?php
    $i = 1;
    do {
      echo "2 x $i = " . (2 * $i) . "<br>";
      $i++;
    } while ($i <= 10);
    ?>
  </p>
</body>
</html>
