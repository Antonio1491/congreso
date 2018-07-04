<!doctype html>
<html class="no-js" lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones Educativas | Congreso Internacional de Parques Urbanos</title>
  <?php  require("assets/head_common.php"); ?>
  <?php require("assets/clases_2.php");

  ?>
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="sesiones">
    <div class=" header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">SESIONES EDUCATIVAS</h1>
        </div>
      </div>
    </div>
    <!-- <div id="popup" style="display: none;">
      <div class="content-popup">
          <div class="close"><a href="#" id="close"><i class="fi-x-circle large"></i></div>
          <div>
             <a href="http://congresoparques.com/bases-concurso.php" target="_blank">
               <img id="img-popup" src="img/mapa.png" alt="">
             </a>
          </div>
      </div>
  	</div> -->
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
                  $sesiones = new Sesiones();
                  $array_diseno = $sesiones->mostrarSesiones(2);
                  foreach ($array_diseno as $dato) {
                    echo "<li class='list-sesiones ".$dato['id_conferencia']."'>".$dato['nombre_conferencia']. "</li>";

                  }
               ?>

            </ul>
          </div>
        </article>
      </div>
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
