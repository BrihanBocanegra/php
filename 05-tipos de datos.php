<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
<!-- Declaraciones echo & print -->
<p>Las variables pueden almacenar datos de diferentes tipos, y diferentes tipos de datos pueden hacer cosas diferentes.</p>

<!--
PHP admite los siguientes tipos de datos:
    String
    Integer
    Float (números de puntos flotantes - también llamados double)
    Boolean
    Array
    Object
    Null
    Undefined
-->

<?php
// String
$txt = "¡Hola Mundo!";

// Integer
$numero = 2022;

// Float
$decimal = 99.99;

// Boolean
$verdadero = true;
$falso = false;

// Array
$matriz = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
var_dump($matriz);

// Object

// Null
$nulo = null;
var_dump($nulo);
?>

</body>
</html>