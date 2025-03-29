<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Ingresos</title>
</head>
<body>
    <h2>Formulario de Ingresos</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" required><br><br>
        Ingresos Anuales:
        <select name="ingresos" required>
            <option value="1-1000">1 - 1000</option>
            <option value="1001-3000">1001 - 3000</option>
            <option value=">3000">Más de 3000</option>
        </select><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $ingresos = $_POST["ingresos"];
        
        echo "<h3>Resultado:</h3>";
        echo "Nombre: $nombre<br>";
        echo "Ingresos: $ingresos<br>";

        if ($ingresos == ">3000") {
            echo "<p style='color:black;'>Debe pagar impuestos a las ganancias.</p>";
        } else {
            echo "<p style='color:black;'>No debe pagar impuestos a las ganancias.</p>";
        }
    }
    ?>
</body>
</html>