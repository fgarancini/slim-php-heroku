<?php
include_once "./Ejercicios/Ejercicio21/archivos.php";
include_once "./Ejercicios/Ejercicio21/usuario.php";

$nombre = $_GET["nombre"];
$clave = $_GET["clave"];
$mail = $_GET["mail"];
$user = new Usuario($nombre,$clave,$mail);

// $user = new Usuario("admin","1234","gmail@gmail.com");

$data = Archivos::LeerCsv("usuarios.csv");
$estado = Usuario::VerificaUsuarioRegistrado($user,$data);

echo $estado;

?>