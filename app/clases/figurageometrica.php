<?php  
    abstract class FiguraGeometrica{
        
        protected string $_color;
        protected float $_perimetro;
        protected float $_superficie;

        private function __construct() {}

        public function getColor()
        {
            return $this->_color;
        }
        
        public function setColor($color)
        {
            $this->_color=$color;
        }
        
        public abstract function __toString();

        public abstract function Dibujar();

        protected abstract function CalcularDatos();

    }
?>