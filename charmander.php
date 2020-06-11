<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Charmander - RJJ</title>

  <link href="css/bootstrap.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

  <link href="css/game.css" rel="stylesheet">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">RJJ - Ruutude järgi joonistamise</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Avaleht</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Meist</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
  <div class="row">
    <div class="col">
    <hr>
    <h4>Valige pildi suurus</h4>
          <form class="size-picker">
            KÕRGUS:
            <input type="number" class="input-height" name="height" min="1" max="50" value="35">
            <br><br>
            LAIUS:
            <input type="number" class="input-width" name="width" min="1" max="50" value="25">
            <p><em>Suuruse valimine kustutab pildi!</em></p>
            <button type="submit" class="btn-warning btn-lg btn-block"><i style="color:white" class="fas fa-table"></i> VALI SUURUS</button>
          </form>
          <h4>Valige värv</h4>
          <input type="color" class="color-picker" value="#6aa5b8">
          <button type="submit" id="quick-fill" class="btn-warning btn-lg btn-block"><i style="color:white" class="fas fa-tint"></i> ÜLE VÄRVIDA TAUST</button>
          <h4>valik</h4>
          <button type="submit" id="erase-mode" class="btn-warning btn-lg btn-block"><i style="color:white" class="fas fa-eraser"></i> KUSTUTUSKUMM</button>
          <p><em>või topeltklõpsake kustutamiseks</em></p>
          <button type="submit" id="draw-mode" class="btn-warning btn-lg btn-block"><i style="color:white" class="fas fa-pencil-alt"></i> PLIATS</button>
    </div>
    <div class="col-6">
    <hr>
    <h1>Charmander</h1>
      <table class="pixel-canvas"></table>
    </div>
    <div class="col">
    <hr>
    <img src="images/charomander_new.jpg" alt="..." class="img-thumbnail">
    </div>
  </div>
  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
    <p class="m-0 text-center text-white">RJJ &copy; TLU 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/game.js"></script>
  <script src="vendor/bootstrap-input-spinner.js"></script>
  <script>
    $("input[type='number']").inputSpinner()
  </script>

</body>

</html>


 <!-- MS -->