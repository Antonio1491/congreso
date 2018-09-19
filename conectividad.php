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
    <title>Conectividad</title>
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_conectividad">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina"><br>
        <h1>Conectividad</h1>
      </hgroup>
    </div>
  </header>
<main class="">
  <div class="row align-center">
    <h5 class="subtitulo">¡Próximamente la información completa!</h5>
  </div>
  <div class="row menu_sede">
    <div class="column medium-3">
      <a href="http://www.merida.gob.mx/capitalcultural/" target="_blank"><img src="img/turismo.png" alt=""></a>
    </div>
    <div class="column medium-3">
        <a href="http://www.yucatan.travel/" target="_blank"><img src="img/parques.png" alt="">
    </div>
    <div class="column medium-3">
        <a href="conectividad.php" target=""><img src="img/conectividad.png" alt="">
    </div>
    <div class="column medium-3">
        <a href="hospedajes.php" target=""><img src="img/hospedaje.png" alt="">
    </div>
  </div>
</main>

<?php include'assets/footer.php'; ?>
