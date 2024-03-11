<?php
include("conexion.php");

if (isset($_POST["registrar"])) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);
    $usuario = trim($_POST['usuario']);
    $contrasena = trim($_POST['contrasena']);
    $fecha_reg = date("Y-m-d H:i:s"); // Formato de fecha y hora

    if (
        strlen($nombre) >= 1 &&
        strlen($apellido) >= 1 &&
        strlen($telefono) >= 1 &&
        filter_var($correo, FILTER_VALIDATE_EMAIL) &&
        strlen($usuario) >= 1 &&
        strlen($contrasena) >= 1
    ) {
        // Verificar si el correo ya existe
        $consulta_existencia = "SELECT * FROM datos WHERE correo = '$correo'";
        $resultado_existencia = mysqli_query($conex, $consulta_existencia);

        if (mysqli_num_rows($resultado_existencia) == 0) {
            // El correo no existe, procede con la inserción

            

            // Inserción segura
            $consulta_insercion = "INSERT INTO datos (nombres, apellidos, correo, telefono, usuario, contraseña, fech_registro) VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$usuario', '$contrasena', '$fecha_reg')";

            if (mysqli_query($conex, $consulta_insercion)) {
                echo '<h3>Te has registrado correctamente</h3>';
            } else {
                echo '<h3>Ha ocurrido un error</h3>';
            }
        } else {
            echo '<h3>El correo ya está registrado</h3>';
        }
    } else {
        echo '<h3>Por favor complete los campos correctamente</h3>';
    }
}
?>
