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
<form action="resultadoNotasFinales.php" method="post">
    <p>Parcial 1:<input type="number" name="parcial1"/></p>
    <p>Parcial 2:<input type="number" name="parcial2"/></p>
    <p>Parcial 3:<input type="number" name="parcial3"/></p>
    <p>Examen final: <input type="number" name="examenFinal"/></p>
    <p>Trabajo final: <input type="number" name="trabajoFinal"></p>
    <p><input type="submit" value="Revisar"/></p>
</form>

</body>
</html>