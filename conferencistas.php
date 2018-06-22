<?php
session_start();
    $_SESSION['dia'] = '25';
    $_SESSION['mes'] = '3'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2018';
    $_SESSION['hora'] = '9';
    $_SESSION['minuto'] = '00';
    $_SESSION['segundo'] = '00';

    require("datos_conexion.php")
?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencistas</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
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
        $sql = "SELECT * FROM magistrales";
        $resultado = $conexion->consultar($sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo"<div class='column small-12 medium-3 lista-conferencistas'>
                  <img src='img/conferencistas/".$row['foto']."'>
                </div>";
          echo "<div class='column small-12 medium-3 lista-conferencistas'>
                  <h5>".$row['nombre']."</h5>
                  <h6 class='conferencia'>".$row['conferencia']."</h6>
                  <span class='cargo'>".$row['cargo']."</span><br>
                  <a href='conferencista_magistral.php?id=".$row['id_magistral']."'> Más Información</a>
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

        $sql = "SELECT *
              FROM usuarios
              LEFT JOIN conferencias ON usuarios.id_conferencia = conferencias.id_conferencia
              WHERE conferencias.id_tema !=7
              AND usuarios.nivel =2 AND conferencias.id_conferencia !=37
              ORDER BY usuarios.prioridad ASC";
        // $sql = "SELECT * FROM `usuarios` WHERE nivel = 2 AND  ORDER BY `prioridad` ASC ";
        $resultado = $conexion->consultar($sql);
        while ($fila = mysqli_fetch_array($resultado)) {
          echo"<div class='column small-12 medium-3 lista-conferencistas'>
                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila['foto']."'>
                </div>";
          echo "<div class='column small-12 medium-3 lista-conferencistas'>
                  <h5>".$fila['nombre']."</h5>
                  <h6 class='empresa'>".$fila['empresa']."</h6>
                  <span class='cargo'>".$fila['cargo']."</span><br>";
                  $sql2 = "SELECT * FROM conferencias WHERE id_conferencia = ".$fila['id_conferencia'];
                    $resultado2 = $conexion->consultar($sql2);
                    while ($row = mysqli_fetch_array($resultado2)) {
                      echo "<p>".$row['nombre_conferencia']."</p>";
                    }
                    echo "<a href='conferencista.php?id=".$fila['id_usuario']."'> Más Información</a>";
              echo "</div>";
        }

       ?>
    </div>
  </section>

</main>

<?php include'assets/footer.php'; ?>
