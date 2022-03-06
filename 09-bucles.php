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
    $months = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "setiembre", "octubre", "noviembre", "diciembre");
    $days = array ("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");
    $cursos = array("Fundamentos de PHP", "Fundamentos de Net Core", "Fundamentos de base de datos",  "Programación POO", "SQL Server", "Cloud Computing");

    foreach ($months as $mes) {
        echo $mes . " ";
    }
    echo "<br>";

    foreach ($days as $dia) {
        echo $dia . " ";
    }
    echo "<br>";

    foreach ($cursos as $curso) {
        echo $curso. ", ";
    }
    echo "<br>";

    // While Loop
    $a = 1;
    $b = 10;
    $c = 1;

    while ($a <= 10) {
        echo "El número es: $a </br>";
        $a++;
    }
    echo "<br>";

    while ($b < 100) {
        echo "El número es: $b </br>";
        $b = $b + 5;
    }
    echo "<br>";

    while ($c <= 12) {
        echo "Mes: $c </br>";
        $c++;
    }
    echo "<br>";

    
// Do While Loop


$x = 1;

do {
    echo "El número es $x </br>";
    $x++;
} while ($x <= 10);

$mes = "Febrero";
$x = 0;

do {
    echo "$mes: Mes del amor y la amistad";
    echo "</br>";
    $x++;
    
} while ($x <= 10);
echo "</br>";

// For Loop


for ($i=10; $i > 1; $i--) { 
    echo "$mes: Mes del amor y la amistad </br>";
    echo "El número es $i </br>";
}


?>

<!-- Loop + Condicionales -->

<?php

    $paises = array (
        "Perú",
        "España",
        "Mexico",
        "Argentina",
        "Venezuela",
        "Guatemala"
    );
    
    foreach ($paises as $pais) {

        echo $pais . "</br>";

        if ($pais == "España") {
            break;
        }
    }

    foreach ($paises as $pais) {

        if ($pais == "España") {
            continue;
        }

        echo $pais . "</br>";
    }

?>

</body>
</html>