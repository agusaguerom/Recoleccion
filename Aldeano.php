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

        if($arbusto->getALimento() > 0){

            $tiemporecoleccion = ceil($arbusto->getAlimento() / $this->velocidadrecoleccion) ;
            echo "<div class=contenedorrecolector>
            <h1 class=titulorecolectar> El aldeano recolecto todo en ". $tiemporecoleccion ." minutos<h1>
        
            </div>
            <h2 class=titulorecolectar>EL arbusto quedo vacio</h2>
            ";
    
            $totalrecolectado = $this->getTotalrecolectado();
            $totalrecolectado += $arbusto->getAlimento();
            $this->SetTotalrecolectado($totalrecolectado);
    
            $arbusto->setAlimento(0);
        }else if($arbusto->getALimento = 0){
            echo "<h1>El arbusto esta vacio</h1>";
        }
    }

  

}

?>