<?php
// Nombre del archivo donde están guardados los pedidos
$archivo = "Practica16parte2.txt";

// Verificar si el archivo existe y tiene contenido
if (file_exists($archivo) && filesize($archivo) > 0) {
    // Leer el contenido del archivo
    $contenido = file_get_contents($archivo);

    // Mostrar el contenido de forma estructurada
    echo "<h1>Lista de Pedidos</h1>";
    echo "<pre>$contenido</pre>"; // Muestra el texto con formato
} else {
    echo "<h1>Lista de Pedidos</h1>";
    echo "<p>No hay pedidos registrados aún.</p>";
}
?>
