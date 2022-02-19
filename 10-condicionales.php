<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statements</title>
</head>
<body>
<!-- Declaraciones condicionales -->
<h2>Conditional statements</h2>
<p>Las declaraciones condicionales se utilizan para realizar diferentes acciones basadas en diferentes condiciones.</p>


<!-- Declaración if -->
<h3>if Statements</h3>
<p>El constructor o declaración if permite la ejecución condicional de fragmentos de código si una condición es verdadera.</p>

<?php
    $age = 18;

    if ($age >= 18) {
        echo "Es mayor de edad"; // código a ejecutar si la condición es verdadera;
    }
?>

<!-- Declaración if...else -->
<h3>if...else Statements</h3>
<p>El constructor o declaración if...else permite la ejecución condicional de fragmentos de código si una condición es verdadera y otro código si esa condición es falsa.</p>

<?php
    $age = 18;

    if ($age > 18) {
        echo "Es mayor de edad"; // código a ejecutar si la condición es verdadera;
    } else {
        echo "Es menor de edad"; // código a ejecutar si la condición es falsa;
    }
?>

<!-- Declaración if...elseif...else -->
<h3>if...elseif...else Statements</h3>
<p>El constructor o declaración if...elseif...else permite la ejecución de fragmentos de código para más de dos condiciones</p>

<?php
    $age = 18;
    $name = "Brihan";

    if ($age >= 18 && $name == "Brihan") {
        echo "Bienvenido"; // código a ejecutar si la condición es verdadera;
    } elseif ($age >= 18 || $name != "Brihan") {
        echo "Por confirmar"; // código a ejecutar si la primera condición es falsa y esta condición es verdadera;
    }else {
        echo "Es menor de edad"; // código a ejecutar si la condición es falsa;
    }
?>

<!-- Declaración switch -->
<h3>switch Statements</h3>
<p>El constructor o declaración switch permite realizar diferentes acciones basadas en diferentes condiciones</p>

<?php
    $month = "enero";

    switch ($month) {
        case "enero":
            echo "¡Feliz Año Nuevo!"; // código a ejecutar si...;
            break;
        case "junio":
            echo "¡Feliz Cumpleaños!"; // código a ejecutar si...;
            break;
        case "julio":
            echo "¡Felices Fiestas Patrias!"; // código a ejecutar si...;
            break;
        case "diciembre":
            echo "¡Feliz Navidad!"; // código a ejecutar si...;
            break;
        default:
            echo "Ingresar el mes"; // código a ejecutar si... la expresión no tiene ninguna coincidencia;
      }
?>

</body>
</html>