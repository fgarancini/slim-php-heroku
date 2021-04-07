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
        $json = [];
        $string = file_get_contents("usuarios.json");
        $json = json_decode($string, true);

        if ($data != null) {
            $json_file = fopen('usuarios.json','w');
            array_push($json,json_encode($data,JSON_PRETTY_PRINT));
            fwrite($json_file,"[$json]");
            fclose($json_file);
        }

        return $json_file;
    }

}
?>