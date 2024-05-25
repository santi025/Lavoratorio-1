<?php

namespace app\controllers;


class LoginController
{
    public function authenticate($username, $password)
    {
        $db = new ConexxionDBController();
        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND pwd = ?";
        $stmt = $db->conex->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: views/MenuFacRegBus.php");
            exit;
        } else {
            // echo "Usuario o contraseña incorrectos.";
            header("Location: index.php?action=index&errorSesion=1");
        }

        $db->close();
    }
}
?>
