<?php
require_once("Clases/Pesquero.php");
require_once("Clases/BancoDePesca.php");

$Pesquero = new Pesquero($nombrea);
$BancodePesca = new BancoDePesca();


if(isset($_POST['pescar'])){
    $Pesquero->recolectar($BancodePesca);
}
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
<body class="fondo2">
    

<div class="container">

    <div class="row containerinfo">


        <div class="card text-white bg-success mb-3 col" style="max-width: 18rem;">
            <div class="card-header">Pesquero</div>
            <div class="card-body">
                <h5 class="card-title">Peces Recolectados</h5>
                <p class="card-text"><?php echo $Pesquero->getTotalrecolectado(); ?></p>
            </div>
        </div>

        <div class="card text-white bg-success mb-3 col" style="max-width: 18rem;">
            <div class="card-header">Pesquero</div>
            <div class="card-body">
                <h5 class="card-title">Velocidad Recoleccion</h5>
                <p class="card-text"><?php echo $Pesquero->getVelocidadrecoleccion(); ?></p>
            </div>
        </div>

    

    </div>
    

</div>

<div class="row contenedorimagenes">
<div class='aldeanogif col-6'>
        <?php
        echo  
        "<img src=". $Pesquero->getimgpescador() ." class=imgaldeano alt=Imagen Aldeano>"

        ?>
    </div>


        <div class="contenedorrecolectar">
        <form method="post" class="formPescar">
            <input type="submit" class="btnpescador" name="pescar" value="Pescar" >
        </form>
        <a href="index.html" class="btnvolver">Volver</a>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>