<!DOCTYPE html public>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf8" />
<title>Confirma tu nota final</title>
</head>

<body>
    <a href="formIMC.php">
        <span>Formulario de ICM</span>
    </a><span>---</span>
    <a href="formNotasFinales.php">
        <span>Formulario de notas</span>
    </a><span>---</span>
    <a href="formAmortizaciones.php">
        <span>Formulario de credito</span>
    </a>

<?php
$nombreDelVendedor = $_POST['nombreVendedor'];
$autosVendidos = $_POST['cantidadVendidos'];
$valorVentas = $_POST['totalVendidos'];

$salarioBase= 737000;
$comisionPorVenta = 50000;
$salarioFinal = ($salarioBase + ($comisionPorVenta*$autosVendidos) + ($valorVentas*0.05));

echo "Estimado $nombreDelVendedor Su salario para este mes será de $salarioFinal";

?>
</body>
</html>