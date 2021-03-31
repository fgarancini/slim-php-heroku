<?php
include_once "usuario.php";
include_once "registro.php";


$nuevoUsuario = new Usuario();
$nuevoUsuario->_usuario = $_POST["usuario"];
$nuevoUsuario->_clave = $_POST["clave"];
$nuevoUsuario->_email = $_POST["email"];

if(Usuario::ValidarUsuario($nuevoUsuario))
{
    Registro::AltaUsuario($nuevoUsuario);          
}
else
{
    echo "no";
}


?>