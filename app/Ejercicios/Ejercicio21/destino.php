<?php
include_once "usuario.php";
include_once "archivos.php";


$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$email = $_POST["email"];
$nuevoUsuario = new Usuario($nombre,$clave,$email);
// $nuevoUsuario = new Usuario("admin","1234","gmail@gmail.com");


if(Usuario::ValidarUsuario($nuevoUsuario))
{
    Archivos::AltaUsuario($nuevoUsuario);          
}
else
{
    echo "no";
}


?>