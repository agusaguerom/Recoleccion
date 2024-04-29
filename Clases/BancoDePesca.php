<?php

class BancoDePesca{
    function __construct($cantidadAlimento = 225){
        $this->cantidadAlimento = $cantidadAlimento;
    }

    function getCantidadAlimento(){
        return  $this->cantidadAlimento;
    }
    function setCantidadAlimento($set){
        $this->cantidadAlimento = $set;
    }

    
}

?>