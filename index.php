<?php

require_once 'controllers/database.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/FacturaController.php';

use controllers\LoginController;
use controllers\FacturaController;

$action = $_GET['action'] ?? null;

if ($action === 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $loginController = new LoginController();
    $loginController->authenticate($username, $password);
} elseif ($action === 'factura') {
    
} else {
    include 'views/login.php';
}
?>
