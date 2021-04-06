<?php
include_once "usuario.php";
class Archivos
{
    static function AltaUsuario(Usuario $usuario)
    {
        $datos ="";
        $miArchivo = fopen("usuarios.csv","a+");
        $datos.="$usuario->_nombre,";
        $datos.="$usuario->_clave,";
        $datos.="$usuario->_email";
        fwrite($miArchivo,$datos."\n");
        fclose($miArchivo);
    }

    static function LeerCsv($dir)
    {
        $users = []; 
        if ($dir !== null) {
            $miArchivo = fopen($dir,"r");
            while (!feof($miArchivo) && ($datos = fgetcsv($miArchivo)) !== false) {          
                $usuario = new Usuario($datos[0],$datos[1],$datos[2]);
                array_push($users,$usuario);
            }
            fclose($miArchivo);
        }

        return $users;
    }

    static function GuardarJson($data,$tipo)
    {
        $json = "";

        if ($data != null) {
            $json = fopen('usuarios.json','w');
            fwrite($json,json_encode($data,JSON_PRETTY_PRINT));
            fclose($json);
        }

        return $json;
    }

}
?>