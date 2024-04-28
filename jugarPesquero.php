<?php
require_once("Pesquero.php");
require_once("BancoDePesca.php");

$Pesquero = new Pesquero($nombrea);
$BancodePesca = new BancoDePesca();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pesquero</title>
</head>
<body>
    
<div class="container">

    <div class="row containerinfo">

        <div class="contenedoraldeano col"></div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Pesquero</div>
            <div class="card-body">
                <h5 class="card-title">Peces Recolectadas</h5>
                <p class="card-text"><?php echo $Pesquero->getTotalrecolectado(); ?></p>
            </div>
        </div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Pesquero</div>
            <div class="card-body">
                <h5 class="card-title">Velocidad Recoleccion</h5>
                <p class="card-text"><?php echo $Pesquero->getVelocidadrecoleccion(); ?></p>
            </div>
        </div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Pesquero</div>
            <div class="card-body">
                <h5 class="card-title">Nombre</h5>
                <p class="card-text"><?php echo $Pesquero->getNombre(); ?></p>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="containerpesquero">
            <img src="img/Pescador.gif" alt="">
        </div>
    </div>

</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>