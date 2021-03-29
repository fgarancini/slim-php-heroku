<?php
class Auto
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct(string $color="",string $marca="",float $precio=0,DateTime $fecha=null)
    {
        $this->_color = $color;
        $this->_precio =$precio;
        $this->_marca= $marca;
        $this->_fecha = $fecha;
    }

    public function AgregarImpuestos($tax)
    {
        $this->_precio+=$tax;
    }

    public static function MostrarAuto(Auto $auto)
    {
        $informe = "";
        $informe.="Marca: {$auto->_marca}<br>";
        $informe.="Color: {$auto->_color}<br>";
        $informe.="Precio: {$auto->_precio}<br>";
        if ($auto->_fecha != null) {
            $informe.="Fecha: {$auto->_fecha->format("Y-m-d")}";
        }
        return "$informe <br>";
    }

    public static function Add(Auto $auto1,Auto $auto2)
    {
        if ($auto1->Equals($auto1,$auto2) && $auto2->Equals($auto1,$auto2) && $auto1->_color == $auto2->_color) {
            return $auto1->_precio + $auto2->_precio;
        }
    }
    public function Equals(Auto $auto1,Auto $auto2)
    {
        if($auto1->_marca == $auto2->_marca)
        {
            return "True <br>";
        }
        else
        {
            return "False <br>";
        }
    }

}