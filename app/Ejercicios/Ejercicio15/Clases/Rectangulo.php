<?php
class Rectangulo extends FiguraGeometrica{
    //Atributos
    private double $_ladoDos;
    private double $_ladoUno;

    //Constructor
    public function __construct($l1,$l2)
    {
        parent::__construct();
        $this->_ladoUno= $l1;
        $this->_ladoDos= $l2;
        $this->CalcularDatos();
    }

    public function Dibujar()
    {
        $aux = "";

        for ($i=0; $i < $this->_ladoUno; $i++) { 
            for ($k=0; $k < $this->_ladoDos; $k++) { 
                $aux ="*";
            }
            $aux."<br/>";
        }

        return $aux;
    }
    public function CalcularDatos()
    {
        $this->_perimetro = 2*($this->_ladoUno + $this->_ladoDos);
        $this->_superficie = $this->_ladoUno * $this->_ladoDos;
    }

    public function ToString()
    {
        partent::ToString();

        echo "Lado Uno: $this->_ladoUno <br/>Lado Dos: $this->_ladoDos <br/>";
        echo "<div style='color: {$this->_color}'>{$this->Dibujar()}<div/>";
    }
}