<?php
require_once("Aldeano.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <title>Play</title>
</head>
<body>


 <header class= "headerplay">
    <nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <button class="btn btn-outline-success" type="button">Recolectar</button>
        <button class="btn btn-sm btn-outline-secondary" type="button">Comer</button>
    </form>
    </nav>
  </header>
  


  <main>

    <section>
    <?php
    echo " 
    <div class='card text-white bg-info mb-3 carddatos'>
    <div class='card-body'>
      <h5 class='card-title'>Nombre</h5>
      <p class='card-text'>" . $Aldeano1->nombre . "</p>
    </div>
    ";
?>
    </section>

    <section>
    <?php
    echo " 
    <div class='card text-white bg-info mb-3 carddatos'>
    <div class='card-body'>
      <h5 class='card-title'>Vel. Recoleccion</h5>
      <p class='card-text'>" . $Aldeano1->velocidadrecoleccion . "</p>
    </div>
    ";
?>
    </section>


  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



