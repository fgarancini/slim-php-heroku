<?php
    include './clases/cuadrado.php';
    include './clases/auto.php';
    include './clases/garage.php';



    $auto3 = new Auto("Azul","Ford",65000,new DateTime('NOW'));
    $auto4 = new Auto("Amarillo","Ford",65000,new DateTime('NOW'));
    $auto5 = new Auto("Rojo","Ford",65000,new DateTime('NOW'));

    $auto3->AgregarImpuestos(1500);
    $auto4->AgregarImpuestos(1500);
    $auto5->AgregarImpuestos(1500);

    $importe = Auto::Add($auto3,$auto4);

    echo "$importe <br>";

    echo Auto::MostrarAuto($auto4);
    echo Auto::MostrarAuto($auto3);
    echo Auto::MostrarAuto($auto5);

    $garage_1 = new Garage("El dorado",80);

    $garage_1->Add($auto5);
    $garage_1->Add($auto3);
    $garage_1->Add($auto4);

    echo $garage_1->MostrarGarage();

    echo $garage_1->Remove($auto5);

    echo $garage_1->MostrarGarage();


?>