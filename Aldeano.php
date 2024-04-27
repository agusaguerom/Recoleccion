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
        $tiemporecoleccion = ceil($arbusto->getAlimento() / $this->velocidadrecoleccion) ;
        echo "<h1> El aldeano recolecto todo en ". $tiemporecoleccion ." minutos<h1>";
    }

}

$leer = $_POST['nombrealdeano'];

?>