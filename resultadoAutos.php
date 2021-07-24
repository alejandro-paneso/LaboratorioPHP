<?php

$nombreDelVendedor = $_POST['nombreVendedor'];
$autosVendidos = $_POST['cantidadVendidos'];
$valorVentas = $_POST['totalVendidos'];

$salarioBase= 737000;
$comisionPorVenta = 50000;
$salarioFinal = ($salarioBase + ($comisionPorVenta*$autosVendidos) + ($valorVentas*0.05));

echo "Su salario para este mes será de $salarioFinal";

?>