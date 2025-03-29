<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos de Cursos</title>
</head>
<body>
    <h1>Listado de Cursos</h1>
    <?php
    // Conexión a la base de datos
        $servername = "mysql.webcindario.com"; // Cambia esto si es necesario
        $username = "kamilaweb";        // Cambia esto según tus credenciales
        $password = "kamila";            // Cambia esto según tus credenciales
        $dbname = "kamilaweb";      // Nombre de la base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para obtener los datos de la tabla CURSOS
    $sql = "SELECT * FROM cursos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos en una tabla
        echo "<table border='1'>";
        echo "<tr><th>Código</th><th>Nombre del Curso</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nombrecur"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron cursos.";
    }

    // Cerrar conexión
    $conn->close();
    ?>
</body>
</html>