<?php

class Arbusto{

    function __construct($cantidadAlimento = 125, ){
        $this->cantidadAlimento = $cantidadAlimento;

    }

    function getAlimento(){
        return $this->cantidadAlimento;
    }
    function setAlimento($set){
        $this->cantidadAlimento = $set;
    }

    function MostrarArbusto(){
        echo 
        "<div class=arbusto col>
        <img src=img/Arbusto.png alt=Arbusto imagen class=arbustoimg>
        <button class=recolectar>Recolectar</button>
    </div>"
        ;
    }

}


?>