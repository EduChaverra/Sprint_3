<?php

enum TipoDeLlave: string{
    case CASA = "Llaves de Casa";
    case COCHE = "Llaves de Coche";
    case MOTO = "Llaves de Moto";
}

class Llaves{
    private $tipoDeLlave;
    function __construct(TipoDeLlave $tipoDeLlave){
        $this->tipoDeLlave = $tipoDeLlave;
    }

    public function getTipoDeLlave(){
        return $this->tipoDeLlave->value;
    }
    
}

?>