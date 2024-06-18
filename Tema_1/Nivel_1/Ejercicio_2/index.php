<?php

require_once "persona.php";

$cartera = new Cartera();
$movil = new Movil();
$llavesCasa = new LlavesCasa();
$llavesCoche = new LlavesVehiculo(TipoDeLlave::COCHE);
$llavesMoto = new LlavesVehiculo(TipoDeLlave::MOTO);
$arjetaDeTransporte = new TarjetaDeTransporte();

$persona1 = new Persona($cartera,$movil,$llavesCasa,$llavesMoto);
$persona2 = new Persona($cartera,$movil,$llavesCasa,null,$arjetaDeTransporte);
$persona3 = new Persona($cartera,$movil,$llavesCasa,$llavesCoche);

$persona1->SalirDeCasa();
$persona2->SalirDeCasa();
$persona3->SalirDeCasa();

?>