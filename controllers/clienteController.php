<?php

namespace app\models;

use app\controllers\ConexxionDBController;

class Cliente
{
    private $id;
    private $nombre;
    private $tipoDocumento;
    private $numeroDocumento;
    private $telefono;
    private $email;

    public function insertarCliente($nombre, $tipoDoc, $numDoc, $telefono, $email)
    {
        $dbController = new ConexxionDBController();

       
        $dbController->insertarCliente($nombre, $tipoDoc, $numDoc, $telefono, $email);

        $dbController->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombreCompleto = $_POST['nombre'] ?? '';
    $tipoDocumento = $_POST['tipoDoc'] ?? '';
    $numeroDocumento = $_POST['NumDoc'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $email = $_POST['email'] ?? '';

    $cliente = new Cliente();

  
    $cliente->insertarCliente($nombreCompleto, $tipoDocumento, $numeroDocumento, $telefono, $email);

    
}

?>
