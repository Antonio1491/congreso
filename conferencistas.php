<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencistas | Congreso Internacional de Parques y Recreaión</title>
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">
<?php include('assets/menu.php');
      require('assets/clases_2.php');
?>
<main class="">
  <div class=" header header-8">
    <div class="row align-middle">
      <div class="column small-12 medium-12 text-center">
        <h1 class="titulos">CONFERENCISTAS Y PONENTES</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="row column small-12 medium-12 contenido align-center">
      <!-- <p>El 1er Congreso Internacional de Parques Urbanos presenta más de 75 conferencistas y ponentes nacionales e internacionales.</p> -->
      <h3 class="titulo-ponentes ">CONFERENCISTAS MAGISTRALES</h3>
    </div>
    <div class="row contenido">
      <?php

        $conferencistas = new Conferencistas();
        $array_conferencistas = $conferencistas->mostrarConfMagistrales();

        foreach ($array_conferencistas as $valor) {
          echo $tabla = "<div class='column small-12 medium-3 lista-conferencistas'>
                            <img src='img/conferencistas/".$valor['foto']."'>
                          </div>
                          <div class='column small-12 medium-3 lista-conferencistas'>
                            <h5>".$valor['nombre']."</h5>
                            <h6 class='conferencia'>".$valor['conferencia']."</h6>
                            <span class='cargo'>".$valor['cargo']."</span><br>
                            <a href='conferencista_magistral.php?id=".$valor['id_magistral']."'> Más Información</a>
                          </div>";
        }

       ?>
    </div>
    <hr>
    <div class="row align-center contenido">
      <h3 class="titulo-ponentes ">CONFERENCISTAS SESIONES EDUCATIVAS</h3>
    </div>
    <div class="row contenido">
      <?php

        $array_conf_sesiones = $conferencistas->mostrarConferencistas();

       ?>
    </div>
  </section>

</main>

<?php include'assets/footer.php'; ?>
