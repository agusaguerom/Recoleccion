<?php

class Arbusto{

    function __construct($cantidadAlimento = 125){
        $this->cantidadAlimento = $cantidadAlimento;
    }

    function getAlimento(){
        return $this->cantidadAlimento;
    }

}


?>