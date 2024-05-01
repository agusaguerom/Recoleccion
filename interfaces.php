<?php
interface Recolector{
     function recolectar(Recolectable $recolectable);
}

interface Recolectable{
        function getAlimento();
}
?>