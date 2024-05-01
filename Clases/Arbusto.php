<?php
require_once('interfaces.php');
class Arbusto implements Recolectable{

    function __construct($cantidadAlimento = 125, $imgarbusto = 'img/Arbusto.png'){
        $this->cantidadAlimento = $cantidadAlimento;
        $this->imgarbusto = $imgarbusto;


    }

    function getAlimento(){
        return $this->cantidadAlimento;
    }
    function setAlimento($set){
        $this->cantidadAlimento = $set;
    }
    function getimgArbusto(){
        return $this->imgarbusto;
    }
    function setimgArbusto($set){
        $this->imgarbusto = $set;
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