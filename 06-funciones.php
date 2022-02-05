<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<!-- Funciones -->
<p>Una función es una serie de órdenes que pueden existir y ejecutarse perfectamente de forma individual e independiente.</p>

<!--
    Una función es un bloque de declaraciones que se pueden usar repetidamente en un programa.
    Una función no se ejecutará automáticamente cuando se carga una página.
    Una función será ejecutada por una llamada a la función.
    Los nombres de las funciones NO distinguen entre mayúsculas y minúsculas.
-->

<?php
function mifuncion() {
    echo "¡Mi primera función!";
}
  
mifuncion(); //Llamada a la función
?>

<!--
Argumentos de una función
    La información se puede pasar a la funciones a través de argumentos.
    Un argumento es como una variable.
    Los argumentos se especifican después del nombre de la función, entre paréntesis.
    Puede agregar tantos argumentos como desee, simplemente sepárelos con una coma.
-->

<?php
function name($argumento) {
  echo "$argumento Bocanegra.";
}

name("Brihan");
?>


<!--
Argumento predeterminado de una función
    La función funcion_predeterminado() sin argumentos, toma el valor predeterminado como argumento.
-->
<?php declare(strict_types=1); // strict requirement
function funcion_predeterminado(int $argumento_predeterminado = 2022) {
  echo "Fecha: $argumento_predeterminado";
}

funcion_predeterminado(2021);
funcion_predeterminado(); // utilizará el valor predeterminado de 2022

?>


</body>
</html>