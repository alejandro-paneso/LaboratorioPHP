<!DOCTYPE html public>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf8" />
<title>Averigue su ICM</title>
</head>

<body>
    <a href="formAmortizaciones.php">
        <span>Formulario de creditos</span>
    </a><span>---</span>
    <a href="formNotasFinales.php">
        <span>Formulario de notas</span>
    </a><span>---</span>
    <a href="formAutomoviles.php">
        <span>Formulario de autos</span>
    </a>
<form action="resultadoIMC.php" method="post">
    <p>Nombre del paciente:<input type="text" name="nombre"/></p>
    <p>Peso en kilogramos: <input type="number" step="0.01" min="0" max="200" name="peso"/></p>
    <p>Estatura en centimetros: <input type="number" name="altura"/></p>
    <p><input type="submit" value="Calcular"/></p>
</form>

</body>
</html>