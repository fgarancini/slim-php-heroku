<?php
class Usuario
{
    public $_nombre;
    public $_clave;
    public $_email;
    public $_ID;
    public $_fecha;
/**
 * El constructor siempre lleva dos giones bajo, se puede fuertetipar y definir valores por 
 * defecto que eequivaldria a crear sobrecarga, hace que los parametros sean opcionales
 */
    public function __construct(string $nombre,string $clave,string $email,int $id,string $fecha)
    {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_email = $email;
        $this->_ID = $id;
        $this->_fecha = $fecha;
    }


    static function ValidarUsuario(Usuario $usuario)
    {
        $_estado = false;
        if (isset($usuario->_email) && isset($usuario->_nombre) && isset($usuario->_clave) && isset($usuario->_ID)&& isset($usuario->_fecha)) {
        
            if ($usuario->_email == "gmail@gmail.com" && $usuario->_clave == "1234") {
                $_estado = true;
            }
            else
            {
                $_estado = "usuario no registrado";
            }   
        }
        else
        {
            $_estado = "Faltan datos";
        }
        return $_estado;
    }
    static function VerificaUsuarioRegistrado(Usuario $u,$lista)
    {
        $aux = "";
        for ($i=0; $i < count($lista); $i++) { 
            if (Usuario::EqualClave($u,$lista[$i]) && Usuario::EqualMail($u,$lista[$i])) {
                $aux .= "<br>Verificado";
                break;
            }
            else if(!Usuario::EqualClave($u,$lista[$i]))
            {
                $aux .= "<br>Error en los datos.";
                break;
            }
            else if(!Usuario::EqualMail($u,$lista[$i]))
            {
                $aux .= "<br>Usuario no registrado.";
                break;
            }
        }
        return $aux;
    }
    static function DibujarListado($arrUsuarios)
    {
        $template= "<ul>";
        for ($i=0; $i < count($arrUsuarios); $i++) { 
            $template .= "<li>{$arrUsuarios[$i]->_nombre}<br/>";
            $template .= "<li>{$arrUsuarios[$i]->_clave}<br/>";
            $template .= "<li>{$arrUsuarios[$i]->_email}<br/>";
            $template .= "<li>{$arrUsuarios[$i]->_ID}<br/>";
            $template .= "<li>{$arrUsuarios[$i]->_fecha}<br/>";
        }
        $template.="<ul/>";

        return $template;
    }

    static function EqualClave(Usuario $u1, Usuario $u2)
    {
        $aux = false;
        if ($u1->_clave == $u2->_clave) {
            $aux = true;
        }
        return $aux;
    }
    static function EqualMail(Usuario $u1, Usuario $u2)
    {
        $aux = false;
        if ($u1->_email == $u2->_email) {
            $aux = true;
        }
        return $aux;
    }
    //
}



?>