<?php
include_once "usuario.php";
class Archivos
{
    static function AltaUsuario(Usuario $usuario)
    {
        $datos ="";
        $miArchivo = fopen("usuarios.csv","a");
        $datos.="$usuario->_nombre,";
        $datos.="$usuario->_clave,";
        $datos.="$usuario->_email";
        fwrite($miArchivo,"$datos\n");
        fclose($miArchivo);
    }

    static function LeerCsv($dir)
    {
        $miArchivo = fopen($dir,"r");

        // while (!feof($miArchivo)) {
        $misDatos = fgetcsv($miArchivo,1000,",");
        // }
        fclose($miArchivo);

        return $misDatos;
    }
}
?>