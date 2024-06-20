<?php
session_start();
include '../config.php';
?>

<h2>Informes de Factura</h2>
<form method="POST" action="generar_informe.php">
    <label for="codigo_factura">Código de Factura (opcional):</label>
    <input type="text" id="codigo_factura" name="codigo_factura">
    <br>
    <label for="fecha_inicio">Fecha de Inicio (opcional):</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio">
    <br>
    <label for="fecha_fin">Fecha de Fin (opcional):</label>
    <input type="date" id="fecha_fin" name="fecha_fin">
    <br>
    <button type="submit">Generar Informe</button>
</form>
