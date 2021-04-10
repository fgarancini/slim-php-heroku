<?php

$json_ugly = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json_ugly));
$json_pretty = json_encode(json_decode($json_ugly), JSON_PRETTY_PRINT);
echo $json_pretty;

?>