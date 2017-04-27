<?php
session_start();
    $_SESSION['dia'] = '25';
    $_SESSION['mes'] = '3'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2018';
    $_SESSION['hora'] = '9';
    $_SESSION['minuto'] = '00';
    $_SESSION['segundo'] = '00';
?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expo Comercial Parques Urbanos</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-expo">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EXPO COMERCIAL PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <form class="" action="" method="post">
      <div class="row">
        <div class="column medium-8">
          <label for="">Razón Social a Facturar</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-4">
          <label for="">RFC:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Calle:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Ext:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Int:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Colonia:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Ciudad:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Estado:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">País:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">C.P:</label>
          <input type="text" name="" value="">
        </div>
      </div>
    </form>
  </article
</main>

<?php include'assets/footer.php'; ?>
