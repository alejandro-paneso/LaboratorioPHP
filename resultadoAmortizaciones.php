<?php

$cedulaDelCliente = $_POST['cedula'];
$nombreDelCliente = $_POST['elcliente'];
$montoDelCredito = $_POST['montodelcredito'];
$tasaDeInteresMensual = $_POST['tasadeinteres'];
$plazoEnMeses = $_POST['plazoenmeses'];

$cuotaFija = $montoDelCredito*(($tasaDeInteresMensual*(pow((1+$tasaDeInteresMensual),$plazoEnMeses)))/(pow((1+$tasaDeInteresMensual),$plazoEnMeses)-1));
echo  "Aqui iria la tabla pero com nola se hacer por ahora pondre el valor de las cuotas que es $cuotaFija";

?>