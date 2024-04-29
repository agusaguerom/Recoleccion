<?php
require_once("BancoDePesca.php");

$nombrea = "Jose";
if(isset($_POST['nombrepescador']) && $_POST['nombrepescador'] != ""){
    $nombrea = $_POST['nombrepescador'];
}
class Pesquero{

    function __construct($nombre = "Jose", $velocidadrecoleccion = 20, $totalrecolectado = 0, $imgpescador = 'img/Pescador1.gif'){
        $this->nombre = $nombre;
        $this->velocidadrecoleccion = $velocidadrecoleccion;
        $this->totalrecolectado = $totalrecolectado;
        $this->imgpescador = $imgpescador;


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
    function getimgpescador(){
        return $this->imgpescador;
    }
    function Setimgpescador($set){
        $this->imgpescador = $set;
    }

    function recolectar($BancoDePesca){

        if($BancoDePesca->getCantidadAlimento() > 0){

            $this->Setimgpescador('img/Pescador2.gif');
            $tiemporecoleccion = ceil($BancoDePesca->getCantidadAlimento() / $this->velocidadrecoleccion) ;
            echo "<div class=contenedorrecolector>
            <h1 class=titulorecolectar> El Pescador recolecto todo en ". $tiemporecoleccion ." minutos<h1>
        
            </div>
            <h2 class=titulorecolectar>EL Lago quedo vacio</h2>
            ";

            $totalrecolectado = $this->getTotalrecolectado();
            $totalrecolectado += $BancoDePesca->getCantidadAlimento();
            $this->SetTotalrecolectado($totalrecolectado);
    
            $BancoDePesca->setCantidadAlimento(0);
        }
    }

}

?>