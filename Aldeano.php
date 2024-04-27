<?php
    require_once("Arbusto.php");
    class Aldeano {
        
        function __construct($nombre, $velocidadrecoleccion = 18){
        $this->nombre = $nombre;
        $this->velocidadrecoleccion = $velocidadrecoleccion;
    }
        function getNombre(){
            return this->nombre;
        }
        function getVelocidadrecoleccion(){
            return $this->velocidadrecoleccion;
        }
        function SetNombre($set){
            $this->nombre = $set;
        }
        function SetVelocidadRecoleccion($set){
            $this->velocidadrecoleccion = $set;
        }
        

    function recolectar($arbusto){
        ceil($arbusto->getAlimento ) ;
    }

}

$leer = $_POST['nombrealdeano'];

?>