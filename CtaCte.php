<?php
include("Cuenta.php");

class CtaCte extends Cuenta{
    private $descubiertoPerm;

    public function __construct($vObjPersona, $vNroCuenta, $vMonto, $vDescubiertoPerm)
    {
        $this->descubiertoPerm= $vDescubiertoPerm;
        parent::__construct($vNroCuenta, $vObjPersona, $vMonto);
    }

    public function getDescubiertoPerm(){
        return $this->descubiertoPerm;
    }

    public function setDescubiertoPerm($descubiertoPerm){
        $this->descubiertoPerm = $descubiertoPerm;
    }

    public function retiro($montoRetiro)
    {
        $montoActual= parent::getSaldo() + $this->getDescubiertoPerm();
        if ($montoActual >= $montoRetiro) {
            parent::retiro($montoRetiro);
        }
    }
    
}
