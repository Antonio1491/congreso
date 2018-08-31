<!doctype html>
<html class="no-js" lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones Educativas | Congreso Internacional de Parques Urbanos</title>
  <?php  require("assets/head_common.php");
  require("assets/clases_2.php");  ?>
</head>
<body onload="countdown('contador')">
<header class="header_paginas header_sesiones">
  <?php include'assets/menu.php'; ?>
  <hgroup class="titulo_pagina"><br>
    <h1>SESIONES EDUCATIVAS</h1>
  </hgroup>
  <p></p>
</header>
<main class="sesiones">
  <div class="expanded barra_sesiones">
    <div class="row">

    </div>
  </div>
  <div class="contenido">
    <article class="container_sesiones row">
      <div class="item_sesiones">
        <div class="item_sesiones_titulos">
          <figure>
            <img src="img/i_diseno.png" alt="" class="">
          </figure>
          <figcaption>
            <h2>Diseño y Planeación</h2>
          </figcaption>
        </div>

      </div>
      <div class="item_sesiones">
        <ul class="lista-sesiones">
        <!--  Código q genera los temas de la bads  -->
        <?php
          $sesiones = new Sesiones();
          $array_diseno = $sesiones->mostrarSesiones(2);
          foreach ($array_diseno as $dato) {
          echo "<li class='list-sesiones ".$dato['id_conferencia']."'>".$dato['nombre_conferencia']. "</li>";
          }
        ?>
        </ul>
      </div>
      <div class="item_sesiones">
        <div class="item_sesiones_titulos">
          <figure>
            <img src="img/i_ciudad.png" alt="" class="">
          </figure>
          <figcaption>
            <h2>La Ciudad</h2>
          </figcaption>
        </div>
      </div>
      <div class="item_sesiones">
        <ul class="lista-sesiones">
        <!--  Código q genera los temas de la bads  -->
        <?php
          $sesiones = new Sesiones();
          $array_diseno = $sesiones->mostrarSesiones(4);
          foreach ($array_diseno as $dato) {
          echo "<li class='list-sesiones ".$dato['id_conferencia']."'>".$dato['nombre_conferencia']. "</li>";
          }
        ?>
        </ul>
      </div>
      <div class="item_sesiones">
        <div class="item_sesiones_titulos">
          <figure>
            <img src="img/i_economia.png" alt="" class="">
          </figure>
          <figcaption>
            <h2>Economía y Usos del Espacio Público</h2>
          </figcaption>
        </div>
      </div>
      <div class="item_sesiones">
        <ul class="lista-sesiones">
        <!--  Código q genera los temas de la bads  -->
        <?php
          $sesiones = new Sesiones();
          $array_diseno = $sesiones->mostrarSesiones(3);
          foreach ($array_diseno as $dato) {
          echo "<li class='list-sesiones ".$dato['id_conferencia']."'>".$dato['nombre_conferencia']. "</li>";
          }
        ?>
        </ul>
      </div>
      <div class="item_sesiones">
        <div class="item_sesiones_titulos">
          <figure>
            <img src="img/i_salud.png" alt="" class="">
          </figure>
          <figcaption>
            <h2>Salud y Medio Ambiente</h2>
          </figcaption>
        </div>
      </div>
      <div class="item_sesiones">
        <ul class="lista-sesiones">
        <!--  Código q genera los temas de la bads  -->
        <?php
          $sesiones = new Sesiones();
          $array_diseno = $sesiones->mostrarSesiones(5);
          foreach ($array_diseno as $dato) {
          echo "<li class='list-sesiones ".$dato['id_conferencia']."'>".$dato['nombre_conferencia']. "</li>";
          }
        ?>
        </ul>
      </div>
      <div class="item_sesiones">
        <div class="item_sesiones_titulos">
          <figure>
            <img src="img/i_servicio.png" alt="" class="">
          </figure>
          <figcaption>
            <h2>Servicio Público y Participación Ciudadana</h2>
          </figcaption>
        </div>

      </div>
      <div class="item_sesiones">
        <ul class="lista-sesiones">
        <!--  Código q genera los temas de la bads  -->
        <?php
          $sesiones = new Sesiones();
          $array_diseno = $sesiones->mostrarSesiones(5);
          foreach ($array_diseno as $dato) {
          echo "<li class='list-sesiones ".$dato['id_conferencia']."'>".$dato['nombre_conferencia']. "</li>";
          }
        ?>
        </ul>
      </div>
    </article>
  </div>



    <!-- <div class="row">
      <div class="column small-12 medium-12">
        <article class=" la-ciudad">
          <header>
              <img src="img/la-ciudad-02.png" alt="" class="isesiones">
              <h4 class="text-center">La Ciudad</h4>
          </header>
          <div class="content-temas">
            <p><span class="letra-capital">L</span>as ciudades están compuestas por elementos
              que las hacen únicas. La peatonalidad, la bicicleta recreativa, datos abiertos y la
              resiliencia son algunos temas que se relacionan con el parque urbano.</p>
              <ul class="lista-sesiones"> -->
              <?php
                // $sql = "SELECT * FROM conferencias WHERE id_tema = 4";
                // $resultado = $conexion->consultar($sql);
                // while ($fila = mysqli_fetch_array($resultado)) {
                //     echo "<li class='list-sesiones ciudad ".$fila['id_conferencia']."'>".$fila['nombre_conferencia']."</li>";
                //     echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                //     echo "<p>".$fila['descripcion']."</p>";
                //       $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                //       $resultado2 = $conexion->consultar($sql2);
                //       echo "<div><strong class='espaciado'>CONFERENCISTAS:</strong></div>";
                //       while ($fila2 = mysqli_fetch_array($resultado2)) {
                //         echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='sesiones/img/conferencistas/".$fila2['foto']."'>";
                //         echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='link-conferencistas'>".$fila2['nombre']. "</a> - ";
                //         echo $fila2['cargo'].", ";
                //         echo $fila2['empresa']." </div>";
                //       }
                //     echo "</div>";
                    ?>
                    <script type="text/javascript">
                    // $(document).ready(function(){
                    //     $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                    //         $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();
                    //
                    //     });
                    //   });
                    </script>
                    <?php
                      // }
                ?>
               <!-- </ul>
          </div>
        </article>
      </div>
    </div> -->


</main>

<script type="text/javascript">
  $(document).ready(function(){
    $('.cinta-ponentes').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToScroll: 1
    });
  });
</script>
<?php include'assets/footer.php'; ?>
