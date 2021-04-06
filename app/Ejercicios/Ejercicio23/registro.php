<?php
include_once "usuario.php";
include_once "archivos.php";

$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$mail = $_POST["mail"];
$ID = rand(1,10000);
$fecha =new DateTime('now');

$user = new Usuario($nombre,$clave,$mail,$ID,$fecha);

$ok = Archivos::GuardarJson($user,"usuario");


echo $ok;
?>