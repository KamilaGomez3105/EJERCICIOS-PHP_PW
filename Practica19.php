<?php
// Inicializar mensaje vacío
$mensaje = "";

// Función para validar las claves
function validar_claves($clave1, $clave2) {
    return ($clave1 === $clave2) 
        ? "<h2 style='color: green;'>Registro exitoso. ¡Bienvenido!</h2>" 
        : "<h2 style='color: red;'>Error: Las claves no coinciden. Inténtelo nuevamente.</h2>";
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = htmlspecialchars($_POST["usuario"], ENT_QUOTES, 'UTF-8');
    $clave1 = $_POST["clave1"];
    $clave2 = $_POST["clave2"];

    // Construir el mensaje de salida
    $mensaje = "<h1>Verificación de Usuario</h1>";
    $mensaje .= sprintf("<p><strong>Usuario:</strong> %s</p>", $usuario);
    $mensaje .= validar_claves($clave1, $clave2);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="post">
        <!-- Entrada de usuario -->
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <!-- Claves -->
        <label for="clave1">Ingrese su clave:</label>
        <input type="password" id="clave1" name="clave1" required><br><br>

        <label for="clave2">Repita su clave:</label>
        <input type="password" id="clave2" name="clave2" required><br><br>

        <!-- Botón para enviar -->
        <button type="submit">Registrar</button>
    </form>

    <!-- Mostrar mensaje -->
    <?= $mensaje; ?>
</body>
</html>