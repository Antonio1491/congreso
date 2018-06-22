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
    <title>EDUCATIONAL SESSIONS</title>
    <?php  require("assets/head_common.php") ?>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="slick/slick.min.js"></script>
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2 sesiones">
  <article class="">
    <div class=" header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EDUCATIONAL SESSIONS</h3>
        </div>
      </div>
    </div>
    <!--<div class="action text-center">
      <a href="convocatoria-sesiones.php" class="button">CONVOCATORIA</a>
    </div>-->
    <!--==================== Contenidos de emergentes =======================-->


    <!--==================== Contenido de la página ============-->
    <div class="hide-for-small-only fila-espacio">
      <section class="cinta-ponentes slider-ponentes">
        <div><img src="img/panelistas/adam.png" alt=""></div>
        <div><img src="img/panelistas/alberto-mercado.png" alt=""></div>
        <div><img src="img/panelistas/aldo.png" alt=""></div>
        <div><img src="img/panelistas/alejandra.png" alt=""></div>
        <div><img src="img/panelistas/alexia.png" alt=""></div>
        <div><img src="img/panelistas/andrea.png" alt=""></div>
        <div><img src="img/panelistas/carlos-aubert.png" alt=""></div>
        <div><img src="img/panelistas/carlos-mourillo.png" alt=""></div>
        <div><img src="img/panelistas/charles.png" alt=""></div>
        <div><img src="img/panelistas/christian.png" alt=""></div>
        <div><img src="img/panelistas/clarisa.png" alt=""></div>
        <div><img src="img/panelistas/david.png" alt=""></div>
        <div><img src="img/panelistas/dhyana.png" alt=""></div>
        <div><img src="img/panelistas/edgardo-bolio.png" alt=""></div>
        <div><img src="img/panelistas/enric.png" alt=""></div>
        <div><img src="img/panelistas/evelyn-hernandez.png" alt=""></div>
        <div><img src="img/panelistas/everardo.png" alt=""></div>
        <div><img src="img/panelistas/fernando-villareal.png" alt=""></div>
        <div><img src="img/panelistas/guillermo-espinosa.png" alt=""></div>
        <div><img src="img/panelistas/jaime-gallo.png" alt=""></div>
        <div><img src="img/panelistas/jayne.png" alt=""></div>
        <div><img src="img/panelistas/jayni.png" alt=""></div>
        <div><img src="img/panelistas/juanita.png" alt=""></div>
        <div><img src="img/panelistas/kathleen.png" alt=""></div>
        <div><img src="img/panelistas/lilia.png" alt=""></div>
        <div><img src="img/panelistas/luis.png" alt=""></div>
        <div><img src="img/panelistas/luis-chin.png" alt=""></div>
        <div><img src="img/panelistas/roberto.png" alt=""></div>
        <div><img src="img/panelistas/sergio-martinez.png" alt=""></div>
        <div><img src="img/panelistas/susan-chin.png" alt=""></div>
        <div><img src="img/panelistas/tom.png" alt=""></div>
      </section>
    </div>

    <div class="row">
      <div class="column">
        <p><span class="letra-capital">T</span>he educational sessions will take place on April 26th and 27th at the International Convention Center of Yucatan. The workshops will on the 25th</p>
        <p>These sessions will be and hour long with fifteen minutes for q&a in which the attendees will be able to interact with the speakers.</p>
        <p>Unlike the keynote presentations, the educational sessions will be located in smaller rooms with maximum capacity of 150 people. There will be 8 parallel sessions corresponding to our 5 themes. Attendees may specialize in one of them, or know them all.</p>
      </div>
    </div>

    <div class="row fila-espacio">
      <div class="column small-12 medium-12">
        <article class="planeacion-diseno">
          <header>
            <img src="img/planeacion-y-diseno-02.png" alt="" class="isesiones">
            <h4 class="text-center">Planning and Design </h4>
          </header>
          <div class="content-temas">
            <p><span class="letra-capital">T</span>he objective of this theme is to talk about parks design principles and processes; delving into specific topics such as: playgrounds, splash pads, dog parks, among others, providing information on the intellectual and creative processes of design and the importance of the correct planning of these spaces for its success.</p>
            <ul class="lista-sesiones">
              <!--  Código q genera los temas de la bads  -->
              <?php
                $sql= "SELECT * FROM conferencias WHERE id_tema = 2 ";
                $resultado = $conexion->consultar($sql);
                while($fila = mysqli_fetch_array($resultado)){
                  echo "<li class='list-sesiones diseno ".$fila['id_conferencia']."'  onclick='descripcion()'>".$fila['nombre_conferencia_ing']."</li>";
                  echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                  echo "<p>".$fila['descripcion']."</p>";
                    $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                    $resultado2 = $conexion->consultar($sql2);
                    echo "<div><strong class='espaciado'>SPEAKERS:</strong></div>";
                    while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                      echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sessions/img/conferencistas/".$fila2['foto']."'>";
                      echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='link-conferencistas'>".$fila2['nombre']. "</a> - ";
                      echo $fila2['cargo'].", ";
                      echo $fila2['empresa']." </div>";
                      }
                      echo "</div>";
                      ?>
                      <script type="text/javascript">
                      $(document).ready(function(){
                          $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                              $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();

                      });
                    });
                  </script>
                  <?php
                    }
              ?>
            </ul>
          </div>
        </article>
      </div>
    </div>

    <div class="row">
      <div class="column small-12 medium-12">
        <article class=" la-ciudad">
          <header>
              <img src="img/la-ciudad-02.png" alt="" class="isesiones">
              <h4 class="text-center">The City</h4>
          </header>
          <div class="content-temas">
            <p><span class="letra-capital">C</span>ities are made up of elements that make them unique. Pedestrian and recreational cycling programs, open data and resilience are some issues related to urban parks.</p>
              <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 3";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones ciudad ".$fila['id_conferencia']."'>".$fila['nombre_conferencia_ing']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>SPEAKERS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sessions/img/conferencistas/".$fila2['foto']."'>";
                      echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='link-conferencistas'>".$fila2['nombre']. "</a> - ";
                        echo $fila2['cargo'].", ";
                        echo $fila2['empresa']." </div>";
                      }
                    echo "</div>";
                    ?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                            $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();

                        });
                      });
                    </script>
                    <?php
                      }
                ?>
               </ul>
          </div>
        </article>
      </div>
    </div>


    <div class="row fila-espacio">
      <div class="column small-12 medium-12 economia">
        <article class="economia">
          <header>
            <img src="img/uso-del-espacio-publico-02.png" alt="" class="isesiones">
            <h4 class="text-center">Economy and Uses of Public Space</h4>
          </header>
          <div class="content-temas">
            <p><span class="letra-capital">I</span>n addition to being spaces for recreation, parks drive the economy and generate jobs. Successful models of management, economic development and fundraising will be presented in this theme showing the wide variety of ways in which a park can be sustainable over time.</p>
            <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 6";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones list-economia ".$fila['id_conferencia']."'>".$fila['nombre_conferencia_ing']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>SPEAKERS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sessions/img/conferencistas/".$fila2['foto']."'>";
                        echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='link-conferencistas'>".$fila2['nombre']. "</a> - ";
                        echo $fila2['cargo'].", ";
                        echo $fila2['empresa']." </div>";
                      }
                    echo "</div>";
                    ?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                            $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();

                        });
                      });
                    </script>
                    <?php
                      }
                ?>
            </ul>
          </div>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="column small-12 medium-12">
        <article class="salud">
          <header>
            <img src="img/salud-y-medio-ambiente-02.png" alt="" class="isesiones">
            <h4 class="text-center">Health and Environment </h4>
          </header>
          <div class="content-temas">
            <p ><span class="letra-capital">T</span>he parks bring an infinite number of benefits to health, in addition to inviting us to physical activation, they are the place where we find nature. Green areas decrease rates of depression, anxiety and work stress, clean the air, improve wind circulation and regulate annual rainfall patterns.</p>
            <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 4";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones list-salud ".$fila['id_conferencia']."'>".$fila['nombre_conferencia_ing']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>SPEAKERS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sessions/img/conferencistas/".$fila2['foto']."'>";
                        echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='link-conferencistas'>".$fila2['nombre']. "</a> - ";
                        echo $fila2['cargo'].", ";
                        echo $fila2['empresa']." </div>";
                      }
                    echo "</div>";
                    ?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                            $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();

                        });
                      });
                    </script>
                    <?php
                      }
                ?>
            </ul>
          </div>
        </article>
      </div>
    </div>

    <div class="row fila-espacio">
      <div class="column small-12 medium-12">
        <article class="servicio-publico">
          <header>
            <img src="img/servicio-publico-02.png" alt="" class="isesiones">
            <h4 class="text-center">Public Service and Citizen Participation </h4>
          </header>
          <div class="content-temas">
            <p ><span class="letra-capital">T</span>he parks need public officials committed to parks. In this theme we will talk about models to encourage citizen participation and structures that improve public service focused on parks.</p>
            <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 5";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones list-funcion ".$fila['id_conferencia']."'>".$fila['nombre_conferencia_ing']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>SPEAKERS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sessions/img/conferencistas/".$fila2['foto']."'>";
                        echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='link-conferencistas'>".$fila2['nombre']. "</a> - ";
                        echo $fila2['cargo'].", ";
                        echo $fila2['empresa']." </div>";
                      }
                    echo "</div>";
                    ?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                            $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();

                        });
                      });
                    </script>
                    <?php
                      }

                ?>
            </ul>
          </div>
        </article>
      </div>
    </div>
    <div class="row collapse barra-secciones align-center">
      <div class="column medium-2">
        <a href="conferencias.php"><img src="img/btn-conferencias.png" alt=""></a>
      </div>
      <div class="column medium-2">
        <a href="sesiones.php"><img src="img/btn-sesiones.png" alt=""></a>
      </div>
      <div class="column medium-2">
        <a href="expo.php"><img src="img/btn-expo.png" alt=""></a>
      </div>
      <div class="column medium-2">
        <a href="talleres.php"><img src="img/btn-talleres.png" alt=""></a>
      </div>
    </div>

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
