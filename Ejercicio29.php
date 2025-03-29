<html>
<head>
  <title>Contador Sencillo</title>
</head>
<body>
  <h1>Contador Sencillo</h1>
  <p>Cantidad de visitas:
  <b>
    <?php
    // Nombre del archivo para almacenar las visitas
    $archivo = "Ejercicio29resultado.txt";

    // Comprobar si el archivo existe, de lo contrario crearlo con un valor inicial
    if (!file_exists($archivo)) {
      $fp = fopen($archivo, "w");
      fputs($fp, "0"); // Escribir un valor inicial de 0
      fclose($fp);
    }

    // Abrir el archivo en modo lectura y escritura
    $fp = fopen($archivo, "r+");
    if ($fp) {
      // Leer el valor actual del contador
      $counter = fgets($fp, 7);
      $counter = intval($counter); // Asegurarse de que sea un número entero

      // Mostrar el valor del contador
      echo $counter;

      // Incrementar el contador
      $counter++;

      // Volver al inicio del archivo y escribir el nuevo valor
      rewind($fp);
      fputs($fp, $counter);
      fclose($fp);
    } else {
      echo "Error al abrir el archivo.";
    }
    ?>
  </b></p>
</body>
</html>