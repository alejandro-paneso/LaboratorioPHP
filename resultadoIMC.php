<?php

$nombreDelPaciente = $_POST['nombre'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$indiceMasaCorporal = round($peso/(pow(($altura/100),2)),2);

if ($indiceMasaCorporal<18.5){
    $criterio = "Por debajo del peso";
}
if ($indiceMasaCorporal>18.5 and $indiceMasaCorporal<24.9){
    $criterio = "Saludable";
}
if ($indiceMasaCorporal>25.0 and $indiceMasaCorporal<29.9){
    $criterio = "Con sobrepeso";
}
if ($indiceMasaCorporal>30 and $indiceMasaCorporal<39.9){
    $criterio = "en estado de obesidad";
}
if($indiceMasaCorporal>40)
{$criterio = "con obesidad mórbida";}

echo "Estimado $nombreDelPaciente Su ICM es de $indiceMasaCorporal, se encuentra $criterio";

?>