<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORT SHOP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h2>Iniciar Sesión</h2>
    <form action="index.php?action=login" method="post">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php
    if(!empty($_GET['errorSesion'])){
        echo '<h4>Usuario o contraseña incorrectos.</h4>';
    }
    ?>
</body>
</html>
