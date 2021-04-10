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

    static function GuardarJson($data,$path)
    {
        $aux = "";
        //Verifico que la ruta existe
        if (file_exists($path)) {
            //Leo el archivo 
            $json_arr = Archivos::LeerJson($path);
            //En caso de que el archivo este vacio LeerJson devuelve un array
            //Ó no sea nulo
            if($json_arr == [] || $json_arr != null)
            {
                //Decodifico el dato pasado por parametro y re-codifico para dar formato
                $json_newData = json_decode(json_encode($data),JSON_PRETTY_PRINT);
                //Lo empujo al Array que va a ser guardado
                array_push($json_arr,$json_newData);
            }
            $file = fopen($path,'w');
            //Codifico el Array y le doy formato
            $json_encoded = json_encode($json_arr,JSON_PRETTY_PRINT);
            fwrite($file,$json_encoded);
            $aux.= "Guadado";
        }
        else
        {
            $aux.= "Ruta vacia";
        }
        fclose($file);
        return $aux;
    }
    static function LeerJson($path)
    {
        if ($path != null) {
            $file_string = file_get_contents($path);
            $json_arr = json_decode($file_string,JSON_PRETTY_PRINT);
            if($json_arr == null)
            $json_arr = [];
        }
        return $json_arr;
    }
}
?>