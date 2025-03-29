<html>
<head>
    <title>Resultado</title>
</head>
<body>
<h2>Resultado del formulario</h2>

<?php
$nombre = $_POST['nombre'];
$deportes = isset($_POST['deportes']) ? $_POST['deportes'] : [];

echo "Nombre: $nombre<br>";
echo "Cantidad de deportes que practica: " . count($deportes) . "<br>";

if (count($deportes) > 0) {
    echo "Deportes seleccionados:<ul>";
    foreach ($deportes as $deporte) {
        echo "<li>$deporte</li>";
    }
    echo "</ul>";
} else {
    echo "No seleccionó ningún deporte.";
}
?>

</body>
</html>
