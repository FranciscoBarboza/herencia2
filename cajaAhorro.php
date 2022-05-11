<?php
include("Cuenta.php");

class CajaAhorro extends Cuenta{
    private $descubierto;

    public function __construct($descubierto, $nroCuenta, $objCuenta, $monto)
    {
        $this->descubierto=$descubierto;
        parent::__construct($nroCuenta, $objCuenta, $monto);
    }
    public function retiro($montoRetiro)
    {
        if($this->getSaldo() >= $montoRetiro){
            parent::retiro($montoRetiro);
        }
    }

    public function getDescubierto(){
        return $this->descubierto;
    }

    public function setDescubierto($descubierto){
        $this->descubierto = $descubierto;
    }
    
}
