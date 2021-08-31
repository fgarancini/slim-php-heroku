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

    public function AgregarImpuesto(float $iva)
    {
        $this->_precio += $iva;
    }

    static function MostrarAuto(Auto $auto)
    {
        return "{$auto->_marca} / {$auto->_color}";
    }

    static function Add(Auto $a1,Auto $a2)
    {
        if ($a1->_marca == $a2->_marca && $a1->_color == $a2->_color) {
            return $a1->_precio + $a2->_precio;
        }
        return 0;
    }
}
?>