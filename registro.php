<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/registro.css">
        <title>EcoSense - Registrarse</title>
    </head>
    <body class="flex-container">
    
        <section class="section" id="registro-section">
            <!-- Contenido del formulario de registro -->
            <form method="post">
            
                <h1 class="tex1">Registrarse</h1>
                <label for="nombre">Nombres:</label>
                <input type="text" id="nombre1" name="nombre" required></p>

                <label for="nombre">Apellidos:</label>
                <input type="text" id="apellido1" name="apellido" required></p>

                <label for="nombre">Telefono:</label>
                <input type="tel" id="tel1" name="telefono" required></p>
    
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo1" name="correo" required></p>
    
                <label for="usuario">Nombre de usuario:</label>
                <input type="text" id="usuario1" name="usuario" required></p>
    
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena1" name="contrasena" required></p>
    
                <label for="confirmar-contrasena">Confirmar contraseña:</label>
                <input type="password" id="confirmar-contrasena" name="confirmar-contrasena" required></p>
    
                <button class="registro-button" name="registrar">Registrarse</button>
            </form>
           <?php
             include("controlador/validar_registro.php");
           
           ?>
            <section class="menu-section">
                <nav>
                    <ul class="menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="login.php">Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </section>
        </section>
    
        <!-- Nueva sección para el menú de opciones -->
        
    
        
    </body>
</html>