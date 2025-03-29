<html>
<head>
    <title>Resultado</title>
</head>
<body>
<h2>Resultado del formulario</h2>
<?php
$nombre = $_POST['nombre'];
$estudios = $_POST['estudios'];

echo "Nombre: $nombre<br>";

if ($estudios == "ninguno") {
    echo "No tiene estudios.";
} elseif ($estudios == "primarios") {
    echo "Tiene estudios primarios.";
} elseif ($estudios == "secundarios") {
    echo "Tiene estudios secundarios.";
}
?>
</body>
</html>
