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
    <a href="formAutomoviles.php">
        <span>Formulario de autos</span>
    </a><span>---</span>
    <a href="formAmortizaciones.php">
        <span>Formulario de credito</span>
    </a>   
<?php
#35% del promedio de los 3 parciales.
#35% de la calificación del examen final.
#30% de la calificación de un trabajo final.
#La materia se aprueba con una nota promedio mínimo de 3, debe mostrar la nota final y el mensaje de “Aprobó” o “No aprobó” de acuerdo al resultado.
$parcial1 = $_POST['parcial1'];
$parcial2 = $_POST['parcial2'];
$parcial3 = $_POST['parcial3'];
$examenFinal = $_POST['examenFinal'];
$trabajoFinal = $_POST['trabajoFinal'];

$resultadoDefinitivo = (((($parcial1+$parcial2+$parcial3)/3)*0.35)+($examenFinal*0.35)+($trabajoFinal*0.3));
$mensaje = "Aprobado";
if ($resultadoDefinitivo<3){
    $mensaje = "No aprobado";}
echo "Usted se encuentra $mensaje en esta materia con una nota de $resultadoDefinitivo.";

?>

</body>
</html>