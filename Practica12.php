<html>
<head>
    <title>Práctica 12 - Checkbox</title>
</head>
<body>
<h2>Selecciona los deportes que practicas</h2>
<form method="post" action="Practica12formulario.php">
    Nombre: <input type="text" name="nombre" required><br><br>

    ¿Qué deportes practicas?<br>
    <input type="checkbox" name="deportes[]" value="futbol"> Fútbol<br>
    <input type="checkbox" name="deportes[]" value="basket"> Basket<br>
    <input type="checkbox" name="deportes[]" value="tennis"> Tennis<br>
    <input type="checkbox" name="deportes[]" value="voley"> Vóley<br><br>

    <input type="submit" value="Enviar">
</form>
</body>
</html>
