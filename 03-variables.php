<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
<!-- Variables en PHP -->
<p>En PHP, una variable comienza con el signo $, seguido del nombre de la variable.</p>

<!--
Reglas para variables de PHP:
    - Una variable comienza con el signo $, seguido del nombre de la variable.
    - Un nombre de variable debe comenzar con una letra o el carácter de subrayado.
    - Un nombre de variable no puede comenzar con un número.
    - Un nombre de variable solo puede contener caracteres alfanuméricos y guiones bajos (Az, 0-9 y _)
    - Los nombres de las variables distinguen entre mayúsculas y minúsculas ( $txt y $TXT son dos variables diferentes)
-->

<?php
# Variable
$txt = "¡Hola Mundo!";

# La declaración de PHP echo y print se usa a menudo para enviar datos a la pantalla.
echo $txt;
print $txt;
?>

</body>
</html>