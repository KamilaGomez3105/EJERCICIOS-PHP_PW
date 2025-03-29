<?php
// Crear la cookie para evitar votos múltiples
setcookie("check", 1);

// Si no se ha enviado el formulario, preparar la cookie para el voto
if (!isset($_POST['submit'])) {
    setcookie("voted", 0);
}
?>
<html>
<head>
<title>Encuesta de Opinión</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h3>¿Qué opinas de este curso?</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="radio" name="reply" value="1"> Excelente, he aprendido mucho<br>
    <input type="radio" name="reply" value="2"> Más o menos, es muy complicado<br>
    <input type="radio" name="reply" value="3"> Baja el nivel, quiero aprender PHP<br>
    <?php
    if (empty($_POST['submit']) && empty($_COOKIE['voted'])) {
        // Mostrar el botón si el formulario no se ha enviado y no se ha votado aún
        echo '<input name="submit" type="submit" value="¡Vota!">';
    } else {
        echo "<p>Gracias por tu voto.</p>\n";

        // Registrar el voto si el formulario ha sido enviado y las cookies están activas
        if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])) {
            $file = "Ejercicio31resultado.txt";

            // Crear el archivo si no existe
            if (!file_exists($file)) {
                $fp = fopen($file, "w");
                fwrite($fp, "0,0,0"); // Iniciar las opciones de voto en 0
                fclose($fp);
            }

            $fp = fopen($file, "r+");
            $vote = fread($fp, filesize($file));

            // Dividir el contenido en un array
            $arr_vote = explode(",", $vote);

            // Incrementar el voto seleccionado
            $arr_vote[$_POST['reply'] - 1]++;

            // Volver a unir los resultados en una cadena
            $vote = implode(",", $arr_vote);
            rewind($fp);
            fputs($fp, $vote);
            fclose($fp);

            // Marcar al usuario como votado
            setcookie("voted", 1);
        }
    }
    ?>
</form>
<a href="Ejercicio31resultado.php" target="_blank">Ver resultados de la encuesta</a>
</body>
</html>