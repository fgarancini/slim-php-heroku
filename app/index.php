<?php

$result = 0;

public function CalcularPotencia($num)
{
    return pow($num,2);
}

for ($i=0; $i < 3; $i++) { 
    $result = CalcularPotencia($i);
    echo "$result<br/>";
}
?>