<?php
    require_once("Arbusto.php");


    class Aldeano implements Recolector{
        
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
        

    function recolectar(Recolectable $recolectable){

        if($recolectable->getALimento() > 0){
            
            $recolectable->setimgArbusto('img/Arbusto2.png');
            $tiemporecoleccion = ceil($recolectable->getAlimento() / $this->velocidadrecoleccion) ;
            echo "<div class=contenedorrecolector>
            <h1 class=titulorecolectar> El aldeano recolecto todo en ". $tiemporecoleccion ." minutos<h1>
        
            </div>
            <h2 class=titulorecolectar>El arbusto quedo vacio</h2>
            ";
    
            $totalrecolectado = $this->getTotalrecolectado();
            $totalrecolectado += $recolectable->getAlimento();
            $this->SetTotalrecolectado($totalrecolectado);
    
        }
    }

  

}

?>