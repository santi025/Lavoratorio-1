<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS FACTURACION</title>
    <link rel="stylesheet" href="../../styles.css">

</head>

<body>
    <h2>Datos del Cliente</h2>
    <form action="procesar_cliente.php" method="post">
        <label for="nombre">Nombre Completo</label> <br>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="tipoDocumento">Tipo de Documento</label><br>
        <input list="TipDocument" placeholder="Elige un tipo de documento:" id="tipoD" name="tipoDoc" required><br>

        <datalist id="TipDocument">
            <option value="CC">CC</option>
            <option value="CE">CE</option>
            <option value="NIT">NIT</option>
            <option value="TI">TI</option>
            <option value="Otro">Otro</option>



        </datalist>
        <label for="email">Numero de Domento</label> <br>
        <input type="numero" id="Numdocumeto" name="NumDoc"><br>

        <label for="email">email</label> <br>
        <input type="email" id="email" name="email"><br>

        <label for="telefono">Teléfono</label> <br>
        <input type="text" id="telefono" name="telefono" required><br>

       

        <button type="submit">Enviar</button>
    </form>

</body>

</html>