<html>
<head>
    <title>Tabla condicional 2</title>
</head>
<body>
<h1>Tabla condicional 2</h1>
<?php
/* Crearemos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos
mostrar en rojo, y los valores positivos en azul */

/* Variación. Un color diferente cada fila que se imprima */
function muestra($valor) {
    global $renglon;
    if ($renglon % 2)
        $fondo = "#eeeeee";
    else
        $fondo = "#dddddd";

    if ($valor < 0.5)
        $color = "red";
    else
        $color = "blue";

    echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
}
?>

<table border="1">
<?php
$renglon = 0;
for ($x = 0; $x <= 2; $x += 0.01) {
    echo "<tr>";
    $renglon++;
    muestra($x);
    muestra(sin($x));
    muestra(cos($x));
    echo "</tr>";
}
?>
</table>
</body>
</html>
