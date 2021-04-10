<?php
include_once "./Ejercicios/Ejercicio21/archivos.php";
include_once "./Ejercicios/Ejercicio21/usuario.php";
echo "ejercicio 22";
$nombre = $_GET["nombre"];
$clave = $_GET["clave"];
$mail = $_GET["mail"];
$user = new Usuario($nombre,$clave,$mail);

/*
    para la verificacion ->
    clave : 1234
    mail : gmail@gmail.com
*/

// $user = new Usuario("admin","1234","gmail@gmail.com");

$data = Archivos::LeerCsv("./Ejercicios/Ejercicio21/usuarios.csv");
$estado = Usuario::VerificaUsuarioRegistrado($user,$data);

echo $estado;

?>