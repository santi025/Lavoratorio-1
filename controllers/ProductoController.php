<?php

namespace app\controllers;

class ProductoControlador{

    public function obtenerProductos(){
        $db = new ConexxionDBController();
        $sql = "SELECT * FROM articulos";
        $result = $db -> conex -> query($sql);
        $productos =[];
        if ($result -> num_rows>0){
            while ($row = $result->fetch_assoc()){
                $productos[]=$row;
            }
        }

        $db -> close();
        return $productos;
    }
}