<?php

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