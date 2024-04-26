<?php

class Arbusto{

    function __construct($cantidadAlimento = 125){
        $this->cantidadAlimento = $cantidadAlimento;
    }

    function getAlimento(){
        echo $this->cantidadAlimento;
    }

}

$Arbusto1 = new Arbusto();

?>