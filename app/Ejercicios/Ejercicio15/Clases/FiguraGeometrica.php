<?php
abstract class FiguraGeometrica{
    protected string $_color;
    protected double $_perimetro;
    protected double $_superficie;

    public function __construct($_color,$_perimetro,$_superficie)
    {

    }

    public function get_color()
    {
        return $this->_color;
    }

    public function setColor(string $_colorSet)
    {
        $this->_color=$colorSet;
    }

    abstract public function Dibujar();
    protected abstract function CalcularDatos();


    public function ToString()
    {
        echo "Color: $this->_color<br/> Perimetro: {$this->_perimetro} <br/>Superficie: {$this->_superficie} <br/>";
    }     
}