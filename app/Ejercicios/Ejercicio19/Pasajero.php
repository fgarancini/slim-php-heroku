<?php
class Pasajero
{
    private $_apellido;
    private $_nombre;
    private $_dni;
    private $_esPlus;

    public function __construct($apellido,$nombre,$dni,$esPlus)
    {
        $this->_apellido = $apellido;
        $this->_nombre = $nombre;
        $this->_dni = $dni;
        $this->_esPlus = $esPlus;
    }

    public function Equals(Pasajero $p1,Pasajero $p2)
    {
        $aux = false;
        if ($p1->_dni == $p2->_dni) {
            $aux = true;
        }
        return $aux;
    }
}