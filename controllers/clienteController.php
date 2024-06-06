<?php

namespace app\models;
require_once '../controllers/database.php';
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
        if ($dbController->insertarCliente($nombre, $tipoDoc, $numDoc, $telefono, $email)) {
            echo "Cliente agregado exitosamente.";
        } else {
            echo "Error al agregar el cliente.";
        }
        $dbController->close();
    }
}


?>
