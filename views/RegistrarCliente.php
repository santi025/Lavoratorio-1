<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS FACTURACION</title>
    <link rel="stylesheet" href="../../styles.css">
    <script>
        function buscarCliente() {
            var numDoc = document.getElementById('Numdocumeto').value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'buscar_cliente.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status == 200) {
                    var response = JSON.parse(this.responseText);
                    if (response.found) {
                        document.getElementById('nombre').value = response.cliente.nombre;
                        document.getElementById('tipoD').value = response.cliente.tipo_documento;
                        document.getElementById('email').value = response.cliente.email;
                        document.getElementById('telefono').value = response.cliente.telefono;
                    } else {
                        alert('Cliente no encontrado. Por favor, complete los campos y cree el cliente.');
                    }
                }
            };
            xhr.send('NumDoc=' + encodeURIComponent(numDoc));
        }
    </script>
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

        <label for="Numdocumeto">Número de Documento</label> <br>
        <input type="text" id="Numdocumeto" name="NumDoc" required><br>

        <label for="email">Email</label> <br>
        <input type="email" id="email" name="email" required><br>

        <label for="telefono">Teléfono</label> <br>
        <input type="text" id="telefono" name="telefono" required><br>

        <button type="button" onclick="buscarCliente()">Buscar</button>
        <button type="submit">Crear</button>
    </form>
   



</body>
</html>
