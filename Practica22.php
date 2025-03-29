<!DOCTYPE html>
<html>
<head>
    <title>Buscar Alumnos</title>
</head>
<body>
    <h1>Buscar Datos de un Alumno</h1>
    <form action="Practica22.php" method="post">
        Nombre del alumno:<br>
        <input type="text" name="nombre" required><br><br>
        <input type="submit" value="Buscar">
    </form>

    <?php
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar el nombre enviado desde el formulario
        $nombre = $_POST['nombre'];

        // Conexión a la base de datos
        $servername = "mysql.webcindario.com"; // Cambia esto si es necesario
        $username = "kamilaweb";        // Cambia esto según tus credenciales
        $password = "kamila";            // Cambia esto según tus credenciales
        $dbname = "kamilaweb";      // Nombre de la base de datos

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta SQL para buscar alumnos por nombre
        $sql = "SELECT * FROM alumnos WHERE nombre LIKE '%$nombre%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los registros en una tabla
            echo "<h2>Resultados:</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Número de Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Semestre</th><th>Carrera</th><th>Correo</th></tr>";

            // Iterar y mostrar cada registro
            while ($row = $result->fetch_assoc()) {
                // Mostrar solo una vez cada registro
                echo "<tr>
                        <td>" . htmlspecialchars($row["n_control"]) . "</td>
                        <td>" . htmlspecialchars($row["nombre"]) . "</td>
                        <td>" . htmlspecialchars($row["ap_paterno"]) . "</td>
                        <td>" . htmlspecialchars($row["ap_materno"]) . "</td>
                        <td>" . htmlspecialchars($row["semestre"]) . "</td>
                        <td>" . htmlspecialchars($row["carrera"]) . "</td>
                        <td>" . htmlspecialchars($row["correo"]) . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No se encontraron alumnos con el nombre '$nombre'.</p>";
        }

        // Cerrar conexión
        $conn->close();
    }
    ?>
</body>
</html>