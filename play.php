<?php
require_once("Aldeano.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Play</title>
</head>
<body>

<img class="fondo" src="img/Fondo.png" alt="fondo">


<?php
    echo " 
    <div class=cardAldeano>
    <h2 id=titnombrealdeano>Nombre</h2>
    <p id=nombrealdeano> ". $Aldeano1->nombre ."</p>
    <h2 id=idtitvelocidad>Velocidad De Recoleccion</h2>
    <p id=aldeanorecoleccion>".  $Aldeano1->velocidadrecoleccion ."</p>
    </div>
    ";
?>


</body>
</html>



