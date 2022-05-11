<?php
include ("Cuenta.php");
include("cajaAhorro.php");
include ("Cuenta.php");
include("CtaCte.php");


include("Persona.php");



$objPersona= new Persona("a", "b", 123);
$objCtaCte= new CtaCte($objPersona, 13245613, 100, 100);

$objCtaCte->retiro(150);

echo $objCtaCte;

