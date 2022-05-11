<?php

class Cuenta{
    private $nroCuenta;
    private $dueño;
    private $saldo;

    public function __construct($vNroCuenta, $vObjPersona, $saldo)
    {
        $this->nroCuenta= $vNroCuenta;
        $this->dueño= $vObjPersona;
        $this->saldo= $saldo;
    }

    public function getNroCuenta(){
        return $this->nroCuenta;
    }

    public function setNroCuenta($nroCuenta){
        $this->nroCuenta = $nroCuenta;
    }

    public function getDueño(){
        return $this->dueño;
    }

    public function setDueño($dueño){
        $this->dueño = $dueño;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    

    public function __toString()
    {
        return "\nNumero Cuenta: ". $this->getNroCuenta().
        "\nDueño: ". $this->getDueño().
        "\nmonto: ". $this->getSaldo();
    }

    /**
     * al monto actual le resta el monto ingresado
     * @param int $montoRetiro
     * @return int 
     */
    public function retiro($montoRetiro){
        $montoCuenta= $this->getSaldo();
        $nuevoMonto= $montoCuenta - $montoRetiro;

        $this->setSaldo($nuevoMonto);
    }
    public function saldoCuenta(){
        return $this->getSaldo();
    }
    public function realizarDeposito($monto){

    }

    
}
