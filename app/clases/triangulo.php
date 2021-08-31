<?php
    class Triangulo extends FiguraGeometrica{
        protected float $_base;
        protected float $_altura;

        public function __construct($base,$altura) {
            $this->_base = $base;
            $this->_altura = $altura;
            $this->CalcularDatos();
        }

        protected function CalcularDatos()
        {
            if ($this->_base > 0 && $this->_altura > 0) {
                $this->_superficie = ($this->_base * $this->_altura) / 2;
                $cateto1 = Operaciones::CalcPotencia($this->_base,2);
                $cateto2 = Operaciones::CalcPotencia($this->_altura,2);
                $hipotenusa = ($cateto1 + $cateto2) / 2;
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
            
        }
    }
?>