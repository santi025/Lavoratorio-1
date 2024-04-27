<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORT SHOPE</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="post">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
<?php
// Verificar si se enviaron datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simular una validación de usuario y contraseña (aquí deberías tener una base de datos)
    // Por ejemplo, supongamos que el usuario es "admin" y la contraseña es "password"
    $valid_username = "admin";
    $valid_password = "password";

    // Verificar si el usuario y la contraseña son correctos
    if ($username === $valid_username && $password === $valid_password) {
        // Iniciar sesión (esto es solo un ejemplo, en un entorno real deberías usar sesiones seguras)
        session_start();
        $_SESSION["username"] = $username;

        // Redireccionar a una página de inicio de sesión exitoso
        header("Location: welcome.php");
        exit;
    } else {
        // Mostrar un mensaje de error si el usuario o la contraseña son incorrectos
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
