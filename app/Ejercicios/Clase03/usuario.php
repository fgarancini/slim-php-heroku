<?php
class Usuario
{
    public $_nombre;
    public $_clave;
    public $_email;

    static function ValidarUsuario(Usuario $usuario)
    {
        $_estado = false;
        if (isset($usuario->_email) && isset($usuario->_nombre) && isset($usuario->_clave)) {
        
            if ($usuario->_email == "gmail@gmail.com" && $usuario->_nombre == "admin" && $usuario->_clave == "1234") {
                $_estado = true;
            }
            else{
                $_estado = "usuario no registrado";
            }   
        }
        else
        {
            $_estado = "Faltan datos";
        }
        return $_estado;
    }
}



?>