<?php
/**Aplicación No 15 (Figuras geométricas)
La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto,
un método getter y setter para el atributo _color, un método virtual (ToString) y dos
métodos abstractos: Dibujar (público) y CalcularDatos (protegido).
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del
objeto que lo invoque (retornar una serie de asteriscos que modele el objeto).
Ejemplo: */

include_once './Entidades/FiguraGeometrica.php';
include_once './Entidades/Rectangulo.php';
include_once './Entidades/Triangulo.php';

$miRec = new Rectangulo(4,8);
$miRec->setColor("blue");
$miRec->ToString();

$miTri = new Triangulo(12,15);
$miTri->setColor("yellow");
$miTri->ToString();