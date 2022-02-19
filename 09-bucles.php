<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<!-- Bucles -->
<h2>Loops</h2>
<p>Un bucle-loop-ciclo se utilizan para ejecutar el mismo bloque de código una y otra vez, siempre que se cumpla una determinada condición.</p>

<!-- Foreach -->
<h3></h3>

<?php
    $months = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "setiembre", "octubre", "noviembre", "diciembre" );
    $days = array ("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");

    foreach ($months as $month) {
        echo $month . " ";
    }
    echo "<br>";
?>

</body>
</html>