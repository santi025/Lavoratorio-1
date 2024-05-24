<?php
namespace app\controllers;

use controllers\ConexxionDBController;

class FacturaController
{
    public function generarFactura($clienteData, $productos)
    {
        $db = new ConexxionDBController();
        $fecha = date('Y-m-d H:i:s');
        $estado = 'Pagada';

        

        $db->close();
    }

    public function obtenerFactura($idFactura)
    {
        $db = new ConexxionDBController();
       
        $db->close();
    }
}
?>
