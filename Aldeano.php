<?php
    require_once("Arbusto.php");

    $nombrea = "Pepe";
    if(isset($_POST['nombrealdeano']) && $_POST['nombrealdeano'] != ""){
        $nombrea = $_POST['nombrealdeano'];
    }

    class Aldeano {
        
        function __construct($nombre="Pepe", $velocidadrecoleccion = 18, $totalrecolectado = 0){
        $this->nombre = $nombre;
        $this->velocidadrecoleccion = $velocidadrecoleccion;
        $this->totalrecolectado = $totalrecolectado;

    }
        function getNombre(){
            return $this->nombre;
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
        function getTotalrecolectado(){
            return $this->totalrecolectado;
        }
        function SetTotalrecolectado($set){
            $this->totalrecolectado = $set;
        }
        

    function recolectar($arbusto){
        $tiemporecoleccion = ceil($arbusto->getAlimento() / $this->velocidadrecoleccion) ;
        echo "<div class=contenedorrecolector>
        <h1 class=titulorecolectar> El aldeano recolecto todo en ". $tiemporecoleccion ." minutos<h1>
        </div>
        ";

        $totalrecolectado = $this->getTotalrecolectado();
        $this->SetTotalrecolectado($totalrecolectado);

        $arbusto->setAlimento($arbusto->getAlimento() - $arbusto->getAlimento());
    }

  

}
$Aldeano = new Aldeano($nombrea);

?>