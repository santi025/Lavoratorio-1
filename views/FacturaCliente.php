

<?php
require_once '../controllers/ProductoController.php';
require_once '../controllers/database.php';



use app\controllers\ProductoControlador;




$productoController = new ProductoControlador();


$productos = $productoController->obtenerProductos();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORT SHOP - Factura</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Productos Disponibles</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?php echo $producto['id']; ?></td>
                <td><?php echo $producto['nombre']; ?></td>
                <td><?php echo $producto['precio']; ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

