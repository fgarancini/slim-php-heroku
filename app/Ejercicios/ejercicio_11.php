<?php
/*
Aplicación No 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).
**/
$result = 0;

function CalcularPotencia($num)
{
    return pow($num,2);
}

for ($i=1; $i < 5; $i++) { 
    $result = CalcularPotencia($i);
    echo "$result<br/>";
}
?>