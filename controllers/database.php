<?php

namespace app\controllers;

use mysqli;

class ConexxionDBController
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = ''; 
    private $dataBase = 'facturacion_tienda_db';
    public $conex;

    public function __construct()
    {
        $this-> conex = new mysqli($this->host, $this->user, $this->pwd, $this->dataBase);
        if ($this->conex->connect_error) {
            die('Error en la conexión a la base de datos: ' . $this->conex->connect_error);
        }
    }
    public function insertarCliente($nombreCompleto, $tipoDocumento, $numeroDocumento, $telefono, $email) {
        $query = "INSERT INTO clientes (nombre, tipo_documento, numero_documento, telefono, email) VALUES ";
        $stmt = $this->conex->prepare($query);

        if ($stmt === false) {
            die('Error en la preparación de la consulta: ' . $this->conex->error);
        }

        $stmt->bind_param('sssss', $nombreCompleto, $tipoDocumento, $numeroDocumento, $telefono, $email);

        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function close()
    {
        $this->conex->close();
    }

   
}
?>
