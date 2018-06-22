<?php
session_start();
    $_SESSION['dia'] = '25';
    $_SESSION['mes'] = '3'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2018';
    $_SESSION['hora'] = '9';
    $_SESSION['minuto'] = '00';
    $_SESSION['segundo'] = '00';

    require("datos_conexion.php")
    // $conexion = new Conexion('localhost', 'root', '', 'anprorgm_sic' );
    // $conexion = new Conexion("localhost", "anprorgm_admin", "Admin_*2016", "anprorgm_sic");
    // $conexion->conectar();
?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones Educativas</title>
  <?php  require("assets/head_common.php") ?>

  <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
  <link rel="stylesheet" href="css/foundation-flex.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"> -->

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2 sesiones">
    <div class=" header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">SESIONES EDUCATIVAS</h1>
        </div>
      </div>
    </div>
    <div id="popup" style="display: none;">
      <div class="content-popup">
          <div class="close"><a href="#" id="close"><i class="fi-x-circle large"></i></div>
          <div>
             <!-- <a href="http://congresoparques.com/bases-concurso.php" target="_blank"> -->
               <img id="img-popup" src="img/mapa.png" alt="">
             <!-- </a> -->
          </div>
      </div>
  	</div>

    <!--==================== Contenido de la página ============-->
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

      <div class="row column ">
        <p><span class="letra-capital">L</span>as sesiones educativas tendrán lugar los días 26 y 27
          de abril en el Centro Internacional de Congresos de Yucatán – el 25 de abril tendrán lugar 9
          <a href="talleres.php">talleres vivenciales</a> en los parques y espacios públicos de la ciudad.</p>
          <p>Estas sesiones tendrán una hora de duración con quince minutos para preguntas y respuestas en donde el asistente podrá interactuar con los ponentes.</p>

            <p>A diferencia de las <a href="conferencias.php">conferencias magistrales</a>, las sesiones
              educativas estarán ubicadas en salones pequeños con una capacidad máxima de 150 personas; se
              tendrán alrededor de 8 sesiones paralelas correspondientes a nuestras 5 temáticas. Los asistentes
              pondrán especializarse en alguna de ellas, o conocer de todas las temáticas.</p>
      </div>
    <div class="row fila-espacio">
      <div class="column small-12 medium-12">
        <article class="planeacion-diseno">
          <header>
            <img src="img/planeacion-y-diseno-02.png" alt="" class="isesiones">
            <h4 class="text-center">Diseño y Planeación</h4>
          </header>
          <div class="content-temas">
            <p><span class="letra-capital">E</span>l objetivo de esta temática es hablar sobre principios y
            procesos de diseño para parques; ahondando en temas específicos
            como: áreas infantiles, juegos de agua, parques de mascotas entre otros. Se
            brindará información sobre los procesos intelectuales y
            creativos de diseño y la importancia de la correcta planeación
            de estos espacios para su éxito. </p>
            <ul class="lista-sesiones">
              <!--  Código q genera los temas de la bads  -->
              <?php
                $sql= "SELECT * FROM conferencias WHERE id_tema = 2 ";
                $resultado = $conexion->consultar($sql);
                while($fila = mysqli_fetch_array($resultado)){
                  echo "<li class='list-sesiones diseno ".$fila['id_conferencia']."'  onclick='descripcion()'>".$fila['nombre_conferencia']."</li>";
                  echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                  echo "<p>".$fila['descripcion']."</p>";
                    $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                    $resultado2 = $conexion->consultar($sql2);
                    echo "<div><strong class='espaciado'>CONFERENCISTAS:</strong></div>";
                    while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                      echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
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
              <h4 class="text-center">La Ciudad</h4>
          </header>
          <div class="content-temas">
            <p><span class="letra-capital">L</span>as ciudades están compuestas por elementos
              que las hacen únicas. La peatonalidad, la bicicleta recreativa, datos abiertos y la
              resiliencia son algunos temas que se relacionan con el parque urbano.</p>
              <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 4";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones ciudad ".$fila['id_conferencia']."'>".$fila['nombre_conferencia']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>CONFERENCISTAS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='sesiones/img/conferencistas/".$fila2['foto']."'>";
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
            <h4 class="text-center">Economía y Usos del Espacio Público</h4>
          </header>
          <div class="content-temas">
            <p><span class="letra-capital">A</span>demás de ser espacios para la recreación, los parques
              impulsan la economía y generan empleos. Se presentarán modelos
              exitosos de administración, fomento económico y procuración de
              fondos mostrando la gran variedad de formas en las que un parque
              puede ser sostenible en el tiempo. </p>
            <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 3";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones list-economia ".$fila['id_conferencia']."'>".$fila['nombre_conferencia']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>CONFERENCISTAS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
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
            <h4 class="text-center">Salud y Medio Ambiente</h4>
          </header>
          <div class="content-temas">
            <p ><span class="letra-capital">L</span>os parques traen infinidad de beneficios a la salud ya que,
              además de invitarnos a la activación física, son el lugar en
              donde nos encontramos con la naturaleza. Las áreas verdes
              disminuyen los índices de depresión, ansiedad y estrés laboral;
              limpian el aire, mejoran las circulaciones del viento y regulan
              los patrones de precipitaciones anuales.</p>
            <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 5";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones list-salud ".$fila['id_conferencia']."'>".$fila['nombre_conferencia']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>CONFERENCISTAS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
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
            <h4 class="text-center">Función Pública y Participación Ciudadana</h4>
          </header>
          <div class="content-temas">
            <p ><span class="letra-capital">L</span>os parques necesitan servidores públicos comprometidos con
              el espacio público, con las mejores prácticas para su
              implementación y sostenimiento en conjunto con la ciudadanía,
              fomentando la participación ciudadana. En esta temática se
              presentarán modelos para fomentar la participación ciudadana
              y estructuras que mejoren el servicio público enfocado a los
              parques.</p>
            <ul class="lista-sesiones">
              <?php
                $sql = "SELECT * FROM conferencias WHERE id_tema = 6";
                $resultado = $conexion->consultar($sql);
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<li class='list-sesiones list-funcion ".$fila['id_conferencia']."'>".$fila['nombre_conferencia']."</li>";
                    echo "<div class='detalles-sesiones' id=".$fila['id_conferencia'].">";
                    echo "<p>".$fila['descripcion']."</p>";
                      $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                      $resultado2 = $conexion->consultar($sql2);
                      echo "<div><strong class='espaciado'>CONFERENCISTAS:</strong></div>";
                      while ($fila2 = mysqli_fetch_array($resultado2)) {
                        echo "<div class='resumen_conferencista'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
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
