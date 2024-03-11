<!-- contactar.html -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contactar.css">
    <title>EcoSense - Contactar</title>
</head>
<body>

    <section class="container">
        <!-- Nueva sección para el menú de opciones -->
        <nav class="menu-section">
            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="registro.php">Registrarse</a></li>
                <li><a href="mision_vision.php">Misión y Visión</a></li>
                
            </ul>
        </nav>

        <section class="section" id="contactar-section">
            <!-- Sección para enviar mensaje y formulario de contacto -->
            <div class="enviar-mensaje">
                <h1 class="tex1">Enviar Mensaje</h1>
                <p>Contáctenos para cualquier pregunta, queja o sugerencia.</p>
                
                <!-- Formulario de contacto -->
                <form id="contact-form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                    <button type="submit" class="mensaje-button">Enviar Mensaje</button>
                </form>
            </div>
        </section>
    </section>

    <script src="script.js"></script>
</body>
</body>
</html>
