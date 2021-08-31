<?php
class Auto
{
    private string $_color;
    private float $_precio;
    private string $_marca;
    private DateTime $_fecha;

    public function __construct($marca,$color,$precio,$fecha) {
        $this->_color = $color;
        $this->_marca = $marca;
        $this->_precio = $precio;
        $this->_fecha =  $fecha;
    }

    public function AgregarImpuestos($iva)
    {
        $this->_precio += $iva;
    }

    static function MostrarAuto(Auto $auto)
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

    public static function Add(Auto $a1,Auto $a2)
    {
        if ($a1->_marca == $a2->_marca && $a1->_color == $a2->_color) {
            return $a1->_precio + $a2->_precio;
        }
        return 0;
    }

    public function Equals(Auto $auto1,Auto $auto2)
    {
        if($auto1->_marca == $auto2->_marca)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>