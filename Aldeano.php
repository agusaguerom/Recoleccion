<?php

    class Aldeano {
        
        function __construct($nombre, $velocidadrecoleccion = 19){
        $this->nombre = $nombre;
        $this->velocidadrecoleccion = $velocidadrecoleccion;
    }
        function getNombre($nombre){
            $this->nombre = $nombre;
        }
        function SetNombre($set){
            $this->nombre = $set;
        }

 

    function recolectar($arbusto){

    }

}

$leer = $_POST['nombrealdeano'];
$Aldeano1 = new Aldeano ($leer);

?>