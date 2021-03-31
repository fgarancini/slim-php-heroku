<?php
include_once "usuario.php";
class Registro
{
    static function AltaUsuario(Usuario $usuario)
    {
        $datos ="";
        $miArchivo = fopen("usuarios.csv","a");
        $datos.="Nombre: $usuario->_nombre\n";
        $datos.="Clave: $usuario->_clave\n";
        $datos.="Email: $usuario->_email\n";
        fwrite($miArchivo,"Ingreso OK.\n$datos\n");
        fclose($miArchivo);
    }
}
?>