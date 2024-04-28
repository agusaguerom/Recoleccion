<?php
require_once("BancoDePesca.php");

if(isset($_POST['nombrepescador']) && $_POST['nombrepescador'] != ""){
    $nombrea = $_POST['nombrepescador'];
}
class Pesquero{

    function __construct($nombre, $velocidadrecoleccion = 20, $totalrecolectado = 0){
        $this->nombre = $nombre;
        $this->velocidadrecoleccion = $velocidadrecoleccion;
        $this->totalrecolectado = $totalrecolectado;

    }
    function getNombre(){
        return $this->nombre;
    }
    function SetNombre($set){
        $this->nombre = $set;
    }
    function getVelocidadrecoleccion(){
        return $this->velocidadrecoleccion;
    }
    function SetVelocidadRecoleccion($set){
        $this->velocidadrecoleccion = $set;
    }
    function getTotalrecolectado(){
        return $this->totalrecolectado;
    }
    function SetTotalrecolectado($set){
        $this->totalrecolectado = $set;
    }

    function recolectar($BancoDePesca){

        if($BancoDePesca->getCantidadAlimento() > 0){

            $tiemporecoleccion = ceil($BancoDePesca->getCantidadAlimento() / $this->velocidadrecoleccion) ;
            echo "<div class=contenedorrecolector>
            <h1 class=titulorecolectar> El Pescador recolecto todo en ". $tiemporecoleccion ." minutos<h1>
        
            </div>
            <h2 class=titulorecolectar>EL Banco de Pesca quedo vacio</h2>
            ";
        }
    }

}

?>