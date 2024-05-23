<?php
// Incluir la clase de conexión a la base de datos
require 'controller/dataBase/Conexiondb.php';

// Verificar si se enviaron datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Crear una instancia de la conexión a la base de datos
    $db = new \app\controllers\databases\ConexxionDBController();

    // Preparar y ejecutar la consulta para validar el usuario
    $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
    $stmt = $db->conex->prepare($sql);
    $stmt->bind_param("ss", $username, $password); // Asumiendo que estás usando contraseñas sin hash para simplificar. En producción, usa hashing.

    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($result->num_rows > 0) {
        // Iniciar sesión
        session_start();
        $_SESSION["username"] = $username;

        // Redireccionar a una página de inicio de sesión exitoso
        header("Location: welcome.php");
        exit;
    } else {
        // Mostrar un mensaje de error si el usuario o la contraseña son incorrectos
        echo "Usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión
    $db->close();
}
?>
