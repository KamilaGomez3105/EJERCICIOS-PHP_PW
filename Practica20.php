<!DOCTYPE html>
<html>
<head>
    <title>Alta de Cursos</title>
</head>
<body>
    <h1>Formulario de Alta de Cursos</h1>
    <form action="Practica20.php" method="post">
        Nombre del curso:<br>
        <input type="text" name="nombrecur" required><br><br>
        <input type="submit" value="Guardar">
    </form>

    <?php
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Datos del formulario
        $nombrecur = $_POST['nombrecur'];

        // Conexión a la base de datos
        $servername = "mysql.webcindario.com"; // Cambia esto si es necesario
        $username = "kamilaweb";        // Cambia esto según tus credenciales
        $password = "kamila";            // Cambia esto según tus credenciales
        $dbname = "kamilaweb";      // Nombre de la base de datos

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Comprobar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Preparar la consulta SQL
        $sql = "INSERT INTO cursos (nombrecur) VALUES ('$nombrecur')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "<p>Nuevo curso agregado exitosamente.</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>
</body>
</html>