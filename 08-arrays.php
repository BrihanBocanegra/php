<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<!-- Arrays -->
<h2>Arrays</h2>
<p>Un array-arreglo-vector-matriz es una variable especial que puede contener más de un valor a la vez:</p>


<!-- Indexed Arrays -->
<h3>Arrays indexadas</h3>

<?php
    //La función array() se usa para crear una matriz:
    $people = array("Brihan", "Tomas", "Mat", "Alonzo", "Raquel");

    echo $people[0] . ", " . $people[1] . ", " . $people[2] . ", " . $people[3] . ".";
    echo "<br>";
?>

<!-- Associative Arrays -->
<h3>Arrays de asociación</h3>
<p>Matriz de una dimensión -una sola lista de pares clave/valor.</p>

<?php
    //Los arreglos asociativos son arreglos que usan claves con nombre que usted les asigna.
    $age = array("Brihan" => "27", "Tomas" => "22", "Alonzo" => "18");

    echo "Su edad es: " . $age['Alonzo'];
    echo "<br>";
?>

<!-- Multidimensional Arrays -->
<h3>Arrays multidimensional</h3>
<p>Matriz de más de una dimensión</p>

<!--
La dimensión de una matriz indica el número de índices que necesita para seleccionar un elemento. 
* Para una matriz bidimensional, necesita dos índices para seleccionar un elemento.
* Para una matriz tridimensional, necesita tres índices para seleccionar un elemento.
-->

<?php
    //Los arreglos asociativos son arreglos que usan claves con nombre que usted les asigna.
    $friends = array(
        array ( 
            array ("Nombre", "Bocanegra", "Vera"),
            25
        ), 
        array ('Brihan', 20),        
        array ('Manuel', 10),
        array ('Raquel', 36),
        array ('Mat', 36)
    );

    echo $friends[0][0][1];
    echo "<br>";
?>

<!-- Sort Functions For Arrays -->
<h3>Funciones de clasificación para Arrays</h3>
<p>Los elementos de una matriz se pueden clasificar en orden alfabético o numérico, descendente o ascendente.</p>

<!--
sort()- ordenar arreglos en orden ascendente
rsort()- ordenar matrices en orden descendente
asort()- ordenar matrices asociativas en orden ascendente, según el valor
ksort()- ordenar matrices asociativas en orden ascendente, según la clave
arsort()- ordenar matrices asociativas en orden descendente, según el valor
krsort()- ordenar matrices asociativas en orden descendente, según la clave
-->

<?php
    // sort()
    $numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    rsort($numbers);

    $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x] . " ";
        }
    echo "<br>";
?>

<!--
acount()- Cuenta todos los elementos de un array o algo de un objeto
-->

<?php
    // acount()
    $months = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "setiembre", "octubre", "noviembre", "diciembre" );
    $days = array ("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");

    $ultimo = count($months) - 1;
    echo "El último mes del año es: " . $months[$ultimo];
    echo "<br>";

    $ultimo = count($days) - 1;
    echo "El último día de la semana es: " . $days[$ultimo];
?>

</body>
</html>