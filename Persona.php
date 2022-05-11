<?php
class Persona{
    private $nombre;
    private $apellido;
    private $documento;

    public function __construct($nombre, $apellido, $documento)
    {
        $this->nombre=$nombre;
        $this->apellido= $apellido;
        $this->documento= $documento;
    }
    //gets
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDocumento(){
        return $this->documento;
    }
    //sets
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setDocumento($apellido){
        $this->documento=$apellido;
    }
    public function __toString()
    {
        return "\nNombre: ". $this->getNombre().
        "\nApellido: ". $this->getApellido().
        "\nDocumento: ". $this->getDocumento();
    }
}