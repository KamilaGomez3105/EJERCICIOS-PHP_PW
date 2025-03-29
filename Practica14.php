<!DOCTYPE html>
<html>
<head>
    <title>Editar Contrato</title>
</head>
<body>
    <h2>Contrato</h2>
    <form method="post">
        <textarea name="contrato" rows="10" cols="80">
En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [……..] en su carácter
de Apoderado, con domicilio en la calle [……..] y el Sr. [……..], futuro empleado con domicilio en [……..],
celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </textarea><br><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $contrato = htmlspecialchars($_POST["contrato"], ENT_QUOTES, 'UTF-8');
        
        echo "<h3>Contrato Modificado</h3>";
        echo "<div style='white-space: pre-wrap; border: 1px solid #ccc; padding: 10px;'>$contrato</div>";
    }
    ?>
</body>
</html>