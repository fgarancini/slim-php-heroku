<?php
include 'Garage.php';
include 'Auto.php';

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

$garage_1 = new Garage("El dorado",80);

$garage_1->Add($auto5);
$garage_1->Add($auto3);
$garage_1->Add($auto2);

echo $garage_1->MostrarGarage();

echo $garage_1->Remove($auto5);

echo $garage_1->MostrarGarage();
