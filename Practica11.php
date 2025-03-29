<html>
<head>
    <title>Práctica 11 - Formulario</title>
</head>
<body>
<h2>Ingrese sus datos</h2>
<form method="post" action="Practica11formulario.php">
    Nombre: <input type="text" name="nombre" required><br><br>
    Nivel de estudios:<br>
    <input type="radio" name="estudios" value="ninguno" required> No tiene estudios<br>
    <input type="radio" name="estudios" value="primarios"> Estudios primarios<br>
    <input type="radio" name="estudios" value="secundarios"> Estudios secundarios<br><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
