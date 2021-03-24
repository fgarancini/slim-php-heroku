<?php

include_once "Auto.php";

$auto1 = new Auto("Rojo","Audi");
$auto2 = new Auto("Amarillo","Audi");

$auto3 = new Auto("Azul","Ford",85000);
$auto4 = new Auto("Azul","Ford",65000);

$auto5 = new Auto("Azul","Ford",65000,new DateTime('NOW'));

$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);

$importe = Auto::Add($auto3,$auto4);

echo "$importe <br>";

echo $auto1->Equals($auto1,$auto2);
echo $auto1->Equals($auto1,$auto5);

echo Auto::MostrarAuto($auto1);
echo Auto::MostrarAuto($auto3);
echo Auto::MostrarAuto($auto5);
