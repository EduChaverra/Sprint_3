<?php

require_once "cartera.php";
require_once "llaves_vehiculo.php";
require_once "llaves_casa.php";
require_once "movil.php";
require_once "tarjeta_transporte.php";

class Persona{

    private Movil $movil;
    private Cartera $cartera;
    private ?LlavesVehiculo $llaveVehiculo;
    private LlavesCasa $llaveCasa;
    private ?TarjetaDeTransporte $tarjetaTransporte;        

    public function __construct(Cartera $cartera, Movil $movil, LlavesCasa $llaveCasa, ?LlavesVehiculo $llaveVehiculo = null, ?TarjetaDeTransporte $tarjetaTransporte = null){
        $this->cartera = $cartera;
        $this->movil = $movil;
        $this->llaveVehiculo = $llaveVehiculo;
        $this->llaveCasa = $llaveCasa;
        $this->tarjetaTransporte = $tarjetaTransporte;
    }

    public function SalirDeCasa(){
        $items = [$this->cartera->getNombre(), $this->movil->getNombre(), $this->llaveCasa->getNombre()];
        if ($this->llaveVehiculo !== null){
            $items[] = $this->llaveVehiculo->getTipoDeLlave();
        }
        if ($this->tarjetaTransporte !== null){
            $items[] = $this->tarjetaTransporte->getNombre();
        }

        echo "Esta saliendo de casa con " . implode(", ", $items) . "<br>";
    }

}

?>