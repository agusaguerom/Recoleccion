<?php
interface Recolector{
     function recolectar($recolectable);
}

interface Recolectable{
        function getAlimento();
}
?>