<?php
    include './clases/cuadrado.php';
    include './clases/auto.php';

    $a =  new Auto("suzuki","Amarillo",30,new DateTime('now'));
    $a1 =  new Auto("suzuki","Amarillo",30,new DateTime('now'));
    $b =  new Auto("suzuki","Azul",55.00,new DateTime('now'));

    $cuadrado = new Cuadrado(8,8);

    echo($cuadrado->__toString());

    echo($a->MostrarAuto($a));

    echo(Auto::Add($a,$a1));
?>