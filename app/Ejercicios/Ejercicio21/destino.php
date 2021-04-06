<?php
include_once "usuario.php";
include_once "archivos.php";


$nuevoUsuario = new Usuario();
$nuevoUsuario->_nombre = $_POST["nombre"];
$nuevoUsuario->_clave = $_POST["clave"];
$nuevoUsuario->_email = $_POST["email"];

if(Usuario::ValidarUsuario($nuevoUsuario))
{
    Archivos::AltaUsuario($nuevoUsuario);          
}
else
{
    echo "no";
}


?>