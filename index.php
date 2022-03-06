<?php

$segundos = 3661;

$horas = (int) $segundos / 3600;
$segundos = (int) $segundos % 3600;
$minutos = (int) $segundos / 60;
$segundos = (int) $segundos % 60;

echo "Son $horas horas, $minutos minutos y $segundos segundos.";

$horas= 2;
$minutos= 30;
$segundos= 10;

$totalSegundos=($horas*3600)+($minutos*60)+($segundos);

echo "El total de segundos es $totalSegundos";

?>


<?php

$num=1;

while($num<10){
    $tabla=$num*2;
    Echo "2* $num=$tabla <br>";
    $num++;
}
