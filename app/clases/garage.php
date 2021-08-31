<?php

class Garage
{
    private string $_razonSocial;
    private string $_precioPorHora;
    private array $_autos;

    public function __construct($razonSocial, $precioPorHora)
    {
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

    public function getAutos()
    {
        return $this->_autos;
    }
    public function MostrarGarage()
    {
        $informe = "";
        $informe .= "$this->_razonSocial<br>";
        $informe .= "$this->_precioPorHora<br>";

        if ($this->_autos != null) {
            foreach ($this->_autos as $a1) {
                $informe .= Auto::MostrarAuto($a1);
            }
        } else {
            $informe = "No hay vehiculos en el garage";
        }

        return $informe;
    }

    public function Equals(Auto $a1)
    {
        $aux = false;
        foreach ($this->_autos as $auto) {
            if ($a1->Equals($a1, $auto)) {
                $aux = true;
                break;
            }
        }

        return $aux;
    }

    public function Add(Auto $a1)
    {
        $estado = "";
        if ($a1 != null) {
            if (!($this->Equals($a1))) {
                array_push($this->_autos, $a1);
                $estado .= "Vehiculo estacionado.";
            } else {
                $estado .= "El vehiculo repetido.";
            }
        } else {
            $estado .= "El vehiculo es null.";
        }

        return $estado;
    }

    public function Remove(Auto $auto)
    {
        $estado = "";
        if ($auto != null) {
            if ($this->Equals($auto)) {
                foreach ($this->_autos as $key => $n) {
                    if ($this->_autos[$key] == $auto) {
                        unset($this->_autos[$key]);
                        $estado .= "Vehiculo eliminado.";
                        break;
                    }
                }
            } else {
                $estado .= "El vehiculo no se encuentra en el garage";
            }
        } else {
            $estado .= "El vehiculo es null";
        }

        return $estado;
    }
}
