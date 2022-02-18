<?php

// Operadores aritméticos

// Adición

$numero1 = 12;
$numero2 = 10;

$resultado = $numero1 + $numero2;

echo "El resultado de la adicción: $resultado";

// Sustracción
$sustraccion = $numero1 - $numero2;
echo "<br>";

echo "El resultado de la sustracción: $sustraccion";

// Multiplicación
echo "<br>";
$multiplicacion = $numero1 * $numero2;
echo "El resultado de la multiplicación: $multiplicacion";

// División
echo "<br>";
$division = $numero1 / $numero2;
echo "El resultado de la división: $division";


// Modulus
echo "<br>";
$modulus = $numero1 % $numero2;
echo "El resultado de modulo: $modulus";


// Exponentiation
echo "<br>";
$exponentiation = $numero1 ** $numero2;
echo "El resultado del exponecial: $exponentiation";


// Operadores de asignación:
$numero3 = $numero2;

// Additon:
$addition = 2;

$addition = $addition + $numero2;
$addition += $numero2; // $addition = 2 + 10
echo "<br>";
echo "Resultado de addition: $addition";

// Subtraction
$subtraction = 2;
$subtraction -= $numero2;
echo "<br>";
echo "Resultado de subtraction: $subtraction";


// Operadores de comparación

$x = 5;
$y = 10;
$z = "10";

// Equal - Igual
$comparacion = $x == $y;
echo "<br>";
var_dump($comparacion);

// Identical - Identico
$comparacion = $x === $z;
echo "<br>";
var_dump($comparacion);

// Not Equal - No es igual
$comparacion = $x != $z;
echo "<br>";
var_dump($comparacion);


// Not Identical - No es Identico
$comparacion = $x !== $y;
echo "<br>";
var_dump($comparacion);


// Not Equal - No es igual
$comparacion = $x <> $z;
echo "<br>";
var_dump($comparacion);


// Greanter - Mayor
$comparacion = $x > $z;
echo "<br>";
echo "El valor es mayor?: ";
var_dump($comparacion);

// Less - Menor
$comparacion = $x < $z;
echo "<br>";
echo "El valor es menor?: ";
var_dump($comparacion);

// Greanter than - Mayor o igual / Mayor o igual que
$comparacion = $x >= $z;
echo "<br>";
echo "El valor $x es mayor o igual que $z?: ";
var_dump($comparacion);

// Less than - Menor o igual / Menor o igual que
$comparacion = $x <= $z;
echo "<br>";
echo "El valor $x es menor o igual que $z?: ";
var_dump($comparacion);
echo "<br>";

// Spaceship - Nave de espacio
$k = 20;
$l = 20;
$g = 10;

echo ($k <=> $g); // 1
echo "<br>";

echo ($k <=> $l); // 0
echo "<br>";

echo ($g <=> $l); // -1
echo "<br>";

// Operadores Incremento / Decremento

// Pre-increment - Pre-incremento
$a = 10;

echo "<br>";
echo "El pre-incremento de 10 es:" . ++$a;

// Post-increment = Pos-incremento
$a = 10;

echo "<br>";
echo "El post-incremento de 10 es:" . $a++; 
echo "<br>";
echo "Resultado final del post-incremento " . $a;

// Pre-decrement - Pre-decremento
$a = 10;

echo "<br>";
echo "El pre-decremento de 10 es:" . --$a;

// Post-increment = Pos-incremento
$a = 10;

echo "<br>";
echo "El post-decremento de 10 es:" . $a--; 
echo "<br>";
echo "Resultado final del post-decremento " . $a;




// Operadores Lógicos



// And - Y
echo "<br>";
var_dump( $x and $y);



// Or - O

// Xor


$x = 30;
$y = 30;
// && - Y
echo "<br>";
var_dump( $x == 20 && $y == 20);


// || - O
$x = 20;
$y = 30;

echo "<br>";
var_dump( $x == 20 || $y == 20);


// ! - Not - No



// String Operators - Operadores de cadena de texto

# Concatenation - Concatenación

$text1 = "Brihan";
$text2 = "Bocanegra";
$text3 = "Vera";



$edad = 27;

echo "<br>";
echo "Nombre completo:" . $text1, $text2;

echo "Nombre completo: $text1 $text2";

# Concatenation assignment - Concatenación de asignación

echo "<br>";

$nombre_completo = $text1 . " " . $text2;

echo $nombre_completo .= " $text3";
echo "<br>";


# Array Operators - Operadores de Matriz

// Union

$servicio_workspace = array("1" => "Web Design", "2"=> "Productivity");
$servicio_cloud = array("3" => "Cloud Computing", "4" => "E-commerce");

$services = ($servicio_workspace + $servicio_cloud);

echo "Todos mis servicios:";
print_r ($services);
echo "<br>";

// Operadores de asignación condicional

# Null coalescing - Funsión de null

$i = 100;
$j;
echo $j ?? $i; // La variable $j es 100 si $i no existe o es nulo;
echo "<br>";

$nombre = "Brihan";
$apellidos;
echo $nombre . " " . ($apellidos ?? "Bocanegra");
echo "<br>";

// Ternary - Alternar


echo("<br>");


$michis_toman_agua = true;
$michis_ladran = false;

$resultado = $michis_toman_agua and $michis_ladran;

var_dump($resultado);


?>