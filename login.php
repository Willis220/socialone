<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>
<body>
    <?php
    if(isset($_GET['usuario']) && isset($_GET['contrasena'])) {
        $usuario = $_GET['usuario'];
        $contrasena = $_GET['contrasena'];

        echo "<h2>Datos ingresados:</h2>";
        echo "Usuario: " . $usuario . "<br>";
        echo "Contraseña: " . $contrasena . "<br>";
    } else {
        header("Location: index.html");
        exit();
    }
    ?>
</body>
</html>
