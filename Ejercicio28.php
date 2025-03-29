<html>
<head>
    <title>Un pequeño mailer para recopilar la opinión</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
</head>
<body>
    <h1>Feedback-Mailer</h1>
    <p>¡Envíame un e-mail!</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Tu dirección de e-mail: <br>
        <input type="text" name="Mail"><br>
        Tu comentario: <br>
        <textarea name="message" cols="50" rows="5"></textarea><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $receiverMail = "ejemplo1@gmail.com"; // Cambia esto a tu email

    if (isset($_POST['Mail']) && !empty($_POST['Mail'])) {
        if (mail($receiverMail, "¡Tienes correo nuevo!", $_POST['message'], "From: " . $_POST['Mail'])) {
            echo "<p>Gracias por enviarme tu opinión.</p>\n";
        } else {
            echo "<p>Lo siento, ha ocurrido un error.</p>\n";
        }
    }
    ?>
</body>
</html>
