<html>
<head>
<title>El gran agujero de seguridad</title>
</head>
<body>
<h2>Agujero de seguridad en register_globals = On</h2>
<form action="<?php echo "Ejercicio33.php"; ?>" method="post"> 
    Contraseña: <input type="password" name="pass">
    <input type="submit" value="Enviar">
</form>

<?php
$login = false; // Aseguramos que la variable $login esté inicializada en false
if (isset($_POST['pass'])) { // Comprobamos si se ha enviado el formulario
    $pass = $_POST['pass']; // Obtenemos la contraseña enviada por el formulario

    if ($pass == "abc_xyz_123") {
        $login = true;
    }
}

if ($login) {
    echo "<p>Aqui empieza el arma secreta.</p>";
}
?>

</body>
</html>