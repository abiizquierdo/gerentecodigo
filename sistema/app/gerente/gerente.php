
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FrenAbiAnd Sales</title>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .buttons {
            margin: 20px;
        }
        .buttons form {
            display: inline;
        }
        .buttons button {
            margin: 10px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>FrenAbiAnd Sales</h1>
        <div class="buttons">
            <form action="../../app/factura/codigo_facturas.php" method="post">
                <button type="submit">Código facturas</button>
            </form>
            <form action="../../app/factura/ubicar_fechas.php" method="post">
                <button type="submit">Ubicar fechas de factura</button>
            </form>
            <form action="../../app/factura/informes_factura.php" method="post">
                <button type="submit">Informes de factura</button>
            </form>
        </div>
        <form action="../../app/factura/informes_factura.php" method="POST">
            <button type="submit">salir</button>
        
</body>
</html>
