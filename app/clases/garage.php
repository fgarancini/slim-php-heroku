<?php

    class Garage{
        private string $_razonSocial;
        private string $_precioPorHora;
        private array $_autos;

        public function __construct($razonSocial,$precioPorHora) {
            $this->_razonSocial = $razonSocial;
            $this->_precioPorHora = $precioPorHora;
            $this->_autos = [];
        }

        public function getRazonSocial()
        {
            return $this->_razonSocial;
        }

        public function getPrecioPorHora()
        {
            return $this->_precioPorHora;
        }

        public function MostrarGarage()
        {
            $str = "Razon social: {$this->getRazonSocial()}</br>Precio por hora:{$this->getPrecioPorHora()}";
          foreach ($this->_autos as $key => $auto) {
              $str .= "Vehiculo n°{$key}:{$auto->MostrarAuto()}</br>";
          }
        }
    }

?>