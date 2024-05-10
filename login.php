<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión exitoso</title>
</head>
<body>
    <?php
    // Verifica si se enviaron los datos del formulario
    if(isset($_GET['usuario']) && isset($_GET['contrasena'])) {
        $usuario = $_GET['usuario'];
        $contrasena = $_GET['contrasena'];
        
        // Muestra los datos ingresados
        echo "<h2>Datos ingresados:</h2>";
        echo "Usuario: " . $usuario . "<br>";
        echo "Contraseña: " . $contrasena . "<br>";
    } else {
        // Redirecciona al formulario si no se enviaron los datos
        header("Location: index.html");
        exit();
    }
    ?>
</body>
</html>
