<?php

namespace app\controllers\databases;
use mysqli;

class ConexxionDBController
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dataBase = 'contactos_db';
    private $conex;

    public function __construct()
    {
        $this->conex = new mysqli($this->host, $this->user, $this->pwd, $this->dataBase);
    }

    public function execSQL($sql)
    {

        if ($this->conex->connect_error) {
            die('error en la conexion db' . $this->conex->connect_error);
        }

        return $this->conex->query($sql);
    }

    public function close (){
        $this->conex->close();
        
    }
}
