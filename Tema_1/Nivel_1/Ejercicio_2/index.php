<?php

require_once "persona.php";

$cartera = new Cartera();
$movil = new Movil();
$llavesCasa = new Llaves(TipoDeLlave::CASA);
$llavesCoche = new Llaves(TipoDeLlave::COCHE);
$llavesMoto = new Llaves(TipoDeLlave::MOTO);
$arjetaDeTransporte = new TarjetaDeTransporte();

$persona1 = new Persona($cartera,$movil,$llavesCasa,$llavesMoto);
$persona2 = new Persona($cartera,$movil,$llavesCasa,null,$arjetaDeTransporte);
$persona3 = new Persona($cartera,$movil,$llavesCasa,$llavesCoche);

$persona1->SalirDeCasa();
$persona2->SalirDeCasa();
$persona3->SalirDeCasa();

?>