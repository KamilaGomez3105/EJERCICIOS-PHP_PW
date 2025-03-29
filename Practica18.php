<?php
// Definir un vector asociativo con usuarios y sus claves de acceso
$usuarios = [
    "usuario1" => "claveA1B2",
"usuario2" => "seguraZ9Y8",
"usuario3" => "passC3X4",
"usuario4" => "adminV6W7",
"usuario5" => "accesoT5U6"
];

// Imprimir cada usuario y su clave en una línea separada
echo "<h1>Claves de acceso de los usuarios</h1>";
echo "<p><strong>Usuario 1:</strong> " . $usuarios["usuario1"] . "</p>";
echo "<p><strong>Usuario 2:</strong> " . $usuarios["usuario2"] . "</p>";
echo "<p><strong>Usuario 3:</strong> " . $usuarios["usuario3"] . "</p>";
echo "<p><strong>Usuario 4:</strong> " . $usuarios["usuario4"] . "</p>";
echo "<p><strong>Usuario 5:</strong> " . $usuarios["usuario5"] . "</p>";
?>
