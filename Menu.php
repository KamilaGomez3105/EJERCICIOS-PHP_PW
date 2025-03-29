<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios y Prácticas de PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fuentes personalizadas -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> <!-- Alternativa para el título -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet"> <!-- Cercana a "Corporative" -->
    
    <style>
        /* Fondo con imagen */
        body {
            background: url('fondo1.jpeg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Capa de opacidad para mejorar la legibilidad */
        .overlay {
            background: rgba(0, 0, 0, 0.6);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Estilo del título principal */
        .titulo {
            font-family: 'Great Vibes', cursive;
            font-size: 3rem;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        /* Estilo de los subtítulos */
        .subtitulo {
            font-family: 'Roboto Slab', serif;
            font-size: 2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
            margin-bottom: 15px;
        }

        /* Tarjetas creativas */
        .tarjeta {
            font-family: 'Playfair Display', serif;
            border: 2px solid black;
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 12px;
            transition: all 0.3s ease-in-out;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        .tarjeta:hover {
            background: white;
            transform: scale(1.05);
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

    <div class="overlay">
        <h1 class="titulo">Ejercicios y Prácticas de PHP</h1>

        <!-- Sección de Ejercicios -->
        <h2 class="subtitulo">Ejercicios</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10">
            <?php
            for ($i = 1; $i <= 34; $i++) {
                $extension = $i == 23 ? '.phtml' : '.php';
                echo '
                <a href="ejercicios/Ejercicio' . $i . $extension . '" 
                   class="tarjeta text-center">
                    <h5 class="text-xl font-bold text-gray-900">Ejercicio ' . $i . '</h5>
                    <p class="text-gray-700"></p>
                </a>';
            }
            ?>
        </div>

        <!-- Sección de Prácticas -->
        <h2 class="subtitulo">Prácticas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php
            for ($i = 5; $i <= 23; $i++) { // Iniciar desde la práctica 5
                echo '
                <a href="ejercicios/Practica' . $i . '.php" 
                   class="tarjeta text-center">
                    <h5 class="text-xl font-bold text-gray-900">Práctica ' . $i . '</h5>
                    <p class="text-gray-700"></p>
                </a>';
            }
            ?>
        </div>
    </div>

</body>
</html>