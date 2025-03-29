<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Pizzas</title>
</head>
<body>
    <h2>Hacer un Pedido</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" required><br><br>
        Dirección: <input type="text" name="direccion" required><br><br>
        
        <input type="checkbox" name="jamon_queso" value="si"> Jamón y Queso
        Cantidad: <input type="number" name="cantidad_jamon" min="0"><br><br>
        
        <input type="checkbox" name="napolitana" value="si"> Napolitana
        Cantidad: <input type="number" name="cantidad_napolitana" min="0"><br><br>
        
        <input type="checkbox" name="mozzarella" value="si"> Mozzarella
        Cantidad: <input type="number" name="cantidad_mozzarella" min="0"><br><br>
        
        <input type="submit" name="confirmar" value="Confirmar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST["nombre"]) ? htmlspecialchars($_POST["nombre"]) : "";
        $direccion = isset($_POST["direccion"]) ? htmlspecialchars($_POST["direccion"]) : "";
        
        // Verificar si se ha seleccionado al menos una pizza
        $pedido = "Nombre: $nombre\n";
        $pedido .= "Dirección: $direccion\n";
        $pedido .= "Pedido:\n";

        $hayPedido = false; // Para verificar si se agregó algún pedido
        
        if (isset($_POST["jamon_queso"]) && isset($_POST["cantidad_jamon"]) && intval($_POST["cantidad_jamon"]) > 0) {
            $pedido .= "- Jamón y Queso: " . intval($_POST["cantidad_jamon"]) . " unidades\n";
            $hayPedido = true;
        }
        if (isset($_POST["napolitana"]) && isset($_POST["cantidad_napolitana"]) && intval($_POST["cantidad_napolitana"]) > 0) {
            $pedido .= "- Napolitana: " . intval($_POST["cantidad_napolitana"]) . " unidades\n";
            $hayPedido = true;
        }
        if (isset($_POST["mozzarella"]) && isset($_POST["cantidad_mozzarella"]) && intval($_POST["cantidad_mozzarella"]) > 0) {
            $pedido .= "- Mozzarella: " . intval($_POST["cantidad_mozzarella"]) . " unidades\n";
            $hayPedido = true;
        }
        
        if ($hayPedido) {
            $pedido .= "------------------------------\n";
            
            // Intenta escribir en el archivo
            if (file_put_contents("Practica16resultado.txt", $pedido, FILE_APPEND | LOCK_EX) !== false) {
                echo "<p>Pedido registrado correctamente.</p>";
            } else {
                echo "<p>Error al guardar el pedido. Verifica los permisos del archivo.</p>";
            }
        } else {
            echo "<p>No se ha seleccionado ninguna pizza. Por favor, selecciona al menos una.</p>";
        }
    }
    ?>
</body>
</html>