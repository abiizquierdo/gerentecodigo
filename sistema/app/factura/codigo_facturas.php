<?php
include '../config.php';
?>

<h2>Buscar Factura por Código</h2>

<form method="POST" action="buscar_codigo.php">
    <label for="codigo_factura">Código de Factura:</label>
    <input type="text" id="codigo_factura" name="codigo_factura" required>
    <button type="submit">Buscar</button>

</form>
