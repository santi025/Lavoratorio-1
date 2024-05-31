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

    public function close()
    {
        $this->conex->close();
    }

   
}
?>
