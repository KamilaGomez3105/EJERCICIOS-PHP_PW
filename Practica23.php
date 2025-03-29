<!DOCTYPE html>
<html>
<head>
    <title>Borrar Curso</title>
</head>
<body>
    <h1>Borrar Curso</h1>
    <form action="Practica23.php" method="post">
        Nombre del curso:<br>
        <input type="text" name="nombrecur" required><br><br>
        <input type="submit" value="Borrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar el nombre del curso
        $nombrecur = $_POST['nombrecur'];

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

        // Consulta para verificar si el curso existe
        $check_sql = "SELECT * FROM cursos WHERE nombrecur = '$nombrecur'";
        $result = $conn->query($check_sql);

        if ($result->num_rows > 0) {
            // Si el curso existe, eliminarlo
            $delete_sql = "DELETE FROM cursos WHERE nombrecur = '$nombrecur'";
            if ($conn->query($delete_sql) === TRUE) {
                echo "<p>El curso '$nombrecur' ha sido eliminado exitosamente.</p>";
            } else {
                echo "<p>Error al borrar el curso: " . $conn->error . "</p>";
            }
        } else {
            // Si el curso no existe, mostrar mensaje
            echo "<p>El curso '$nombrecur' no existe en la base de datos.</p>";
        }

        // Cerrar conexión
        $conn->close();
    }
    ?>
</body>
</html>