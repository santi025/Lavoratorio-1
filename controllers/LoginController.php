<?php

namespace app\controllers;

use config\ConexxionDBController;

class LoginController
{
    public function authenticate($username, $password)
    {
        $db = new ConexxionDBController();
        $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
        $stmt = $db->conex->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: /app/views/factura.php");
            exit;
        } else {
            echo "Usuario o contraseña incorrectos.";
        }

        $db->close();
    }
}
?>
