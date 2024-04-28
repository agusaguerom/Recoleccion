<?php
    require_once('Aldeano.php');
    require_once("Arbusto.php");
    $Arbusto = new Arbusto();

    $Aldeano = new Aldeano($nombrea);

    if(isset($_POST['recoleccion'])){
        $Aldeano->recolectar($Arbusto);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Aldeano</title>
</head>

<body class="bodyaldeano">

<div class="container">

    <div class="row containerinfo">

        <div class="contenedoraldeano"></div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Aldeano</div>
            <div class="card-body">
                <h5 class="card-title">Cantidad Recoleccion</h5>
                <p class="card-text"><?php echo $Aldeano->getTotalrecolectado(); ?></p>
            </div>
        </div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Aldeano</div>
            <div class="card-body">
                <h5 class="card-title">Velocidad Recoleccion</h5>
                <p class="card-text"><?php echo $Aldeano->getVelocidadrecoleccion(); ?></p>
            </div>
        </div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Aldeano</div>
            <div class="card-body">
                <h5 class="card-title">Nombre</h5>
                <p class="card-text"><?php echo $Aldeano->getNombre(); ?></p>
            </div>
        </div>

    </div>

    

</div>

<div class="row col-12">
<div class='aldeanogif col'>
        <img src="img/Aldeano.gif" class="imgaldeano" alt="Imagen Aldeano">
    </div>

    <div class="arbustocontenedor col">
    <img src="img/Arbusto.png" class= "arbustoimg" alt="Arbusto Imagen">
    </div>

    <div>
      <form method="post" class="">
        <input type="submit" class="submitpersonajes" name="recoleccion" value="Recolectar" >
      </form>
    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
