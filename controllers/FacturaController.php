<?php

namespace app\controllers;

use config\ConexxionDBController;

class FacturaController
{
    public function generarFactura($clienteData, $productos)
    {
        $db = new ConexxionDBController();
        $fecha = date('Y-m-d H:i:s');
        $estado = 'Pagada';

        // Inserción del cliente
        // Inserción de la factura
        // Inserción de los productos en la factura

        $db->close();
    }

    public function obtenerFactura($idFactura)
    {
        $db = new ConexxionDBController();
        // Consulta para obtener los datos de la factura
        $db->close();
    }
}
?>
