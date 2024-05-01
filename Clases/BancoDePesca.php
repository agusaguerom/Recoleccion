<?php
require_once('interfaces.php');

class BancoDePesca implements Recolectable{
    function __construct($cantidadAlimento = 225){
        $this->cantidadAlimento = $cantidadAlimento;
    }

    function getAlimento(){
        return  $this->cantidadAlimento;
    }
    function setCantidadAlimento($set){
        $this->cantidadAlimento = $set;
    }

    
}

?>