<?php  
    include './clases/figurageometrica.php';
    include './clases/operaciones.php';
class Cuadrado extends FiguraGeometrica{
    protected float $_ladoUno;
    protected float $_ladoDos;

    public function __construct($l1,$l2) {
        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        if ($this->_ladoUno > 0 && $this->_ladoDos > 0) {
            $this->_superficie = Operaciones::CalcPotencia($this->_ladoUno ,$this->_ladoDos);
            $this->_perimetro = $this->_ladoUno + $this->_ladoDos + $this->_ladoUno + $this->_ladoDos;
        }
    }

    public function Dibujar()
    {
        $str = '';
        for ($i=0; $i < $this->_ladoUno; $i++) { 
            for ($j=0; $j < $this->_ladoDos; $j++) { 
                $str .= '*';
            }
            $str .= '</br>';
        }
        return $str;
    }

    public function __toString()
    {
        return $this->Dibujar();
    }
}

?>