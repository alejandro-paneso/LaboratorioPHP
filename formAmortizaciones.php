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
<form action="resultadoAmortizaciones.php" method="post">
    <p>Cédula del cliente:<input type="text" name="cedula"/></p>
    <p>Nombre del cliente:<input type="text" name="elcliente"/></p>
    <p>Monto del crédito:<input type="number" name="montodelcredito"/></p>
    <p>Tasa de interés mensual: <input type="number" step="0.01" min="0" max="10" name="tasadeinteres"/></p>
    <p>Plazo en meses: <input type="number" name="plazoenmeses"></p>
    <p><input type="submit" value="Revisar"/></p>
</form>

</body>
</html>
