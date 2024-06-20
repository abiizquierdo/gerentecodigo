<?php
session_start();
include '../config.php';
?>

<h2>Ubicar Facturas por Fecha</h2>
<form method="POST" action="buscar_fecha.php">
    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" required>
    <br>
    <label for="fecha_fin">Fecha de Fin:</label>
    <input type="date" id="fecha_fin" name="fecha_fin" required>
    <br>
    <button type="submit">Buscar</button>
</form>
