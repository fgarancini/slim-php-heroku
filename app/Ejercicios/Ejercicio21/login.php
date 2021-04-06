<?php
include_once "usuario.php";
include_once "archivos.php";

$nombre = $_GET["nombre"];
$clave = $_GET["clave"];
$mail = $_GET["mail"];
$user = new Usuario($nombre,$clave,$mail);

// $user = new Usuario("admin","1234","gmail@gmail.com");

$data = Archivos::LeerCsv("usuarios.csv");
$estado = Usuario::VerificaUsuarioRegistrado($user,$data);

echo $estado;

?>