<?php

enum TipoDeLlave: string{
    case COCHE = "Llaves de Coche";
    case MOTO = "Llaves de Moto";
}

class LlavesVehiculo{
    private $tipoDeLlave;
    function __construct(TipoDeLlave $tipoDeLlave){
        $this->tipoDeLlave = $tipoDeLlave;
    }

    public function getTipoDeLlave(){
        return $this->tipoDeLlave->value;
    }
    
}

?>