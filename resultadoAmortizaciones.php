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
    <a href="formAutomoviles.php">
        <span>Formulario de autos</span>
    </a>
<?php

$cedulaDelCliente = $_POST['cedula'];
$nombreDelCliente = $_POST['elcliente'];
$montoDelCredito = $_POST['montodelcredito'];
$tasaDeInteresMensual = $_POST['tasadeinteres'];
$plazoEnMeses = $_POST['plazoenmeses'];


$cuotaFija = $montoDelCredito*(($tasaDeInteresMensual*(pow((1+$tasaDeInteresMensual),$plazoEnMeses)))/(pow((1+$tasaDeInteresMensual),$plazoEnMeses)-1));
echo  "Aqui iria la tabla pero no la se hacer por ahora pondre el valor de las cuotas que es $cuotaFija";

?>

</body>
</html>