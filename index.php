<?php

require_once '../config/database.php';
require_once '../app/controllers/LoginController.php';
require_once '../app/controllers/FacturaController.php';

use app\controllers\LoginController;


$action = $_GET['action'] ?? null;

if ($action === 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $loginController = new LoginController();
    $loginController->authenticate($username, $password);
} elseif ($action === 'factura') {
    
} else {
    include '../app/views/login.php';
}
?>
