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
    <title>Programa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <?php  require("assets/head_common.php");
            require ("datos_conexion.php");
    ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class=" header header-8">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">PROGRAMA COMPLETO</h1>
        </div>
      </div>
    </div>
    <div class="row column contenido">
      <h4 class="titulo-programa ">PISTAS</h4>
    </div>
    <div class="row">
      <div class="column pistas text-center">
        <figure>
          <img src="img/icon-magistrales.png" alt="icon-magistrales">
          <figcaption>Conferencias Magistrales</figcaption>
        </figure>
        <figure>
          <img src="img/icon-talleres.png" alt="icon-magistrales">
          <figcaption>Talleres</figcaption>
        </figure>
        <figure>
          <img src="img/icon-sesiones.png" alt="icon-magistrales">
          <figcaption>Sesiones Educativas</figcaption>
        </figure>
        <figure>
          <img src="img/icon-expo.png" alt="icon-magistrales">
          <figcaption>Expo</figcaption>
        </figure>
      </div>
    </div>
    <hr>
    <div class="row column fila-espacio">
      <h4 class="titulo-programa">TEMÁTICAS</h4>
    </div>
    <div class="row">
      <div class="column pistas">
        <figure>
          <img src="img/planeacion-y-diseno-02.png" alt="icon-magistrales">
          <figcaption>Planeación y Diseño</figcaption>
        </figure>
        <figure>
          <img src="img/uso-del-espacio-publico-02.png" alt="icon-magistrales">
          <figcaption>Economía y Usos del Espacio Público</figcaption>
        </figure>
        <figure>
          <img src="img/la-ciudad-02.png" alt="icon-magistrales">
          <figcaption>La Ciudad</figcaption>
        </figure>
        <figure>
          <img src="img/salud-y-medio-ambiente-02.png" alt="icon-magistrales">
          <figcaption>Salud y Medio Ambiente</figcaption>
        </figure>
        <figure>
          <img src="img/servicio-publico-02.png" alt="icon-magistrales">

          <figcaption>Servicio Público y Participación Ciudadana</figcaption>
        </figure>
      </div>
    </div>
    <hr>

    <div class="row align-center">
      <div class="column medium-6 medium-centered">
        <a href="assets/Programa-Congreso Parques.pdf" target="_blank">
          <img src="img/btn-programa.png" alt="Programa preliminar" id="programa">
        </a>
      </div>
    </div>
    <div class="row align-center">
      <h4>Aviso:</h4>
    </div>
    <div class="row align-center" id="aviso-cambios">
      <p>Las Sesiones Educativas del salón 21B se transaladan al salón 25A<br>
      </p>
    </div>
    <!-- Horarios -->
    <section id="miercoles" class="horarios">
      <header>
        <div class="row column align-center">
          <h4><span>DÍA 1 </span><span>25 DE ABRIL</span></h4>
        </div>
      </header>
      <table class="tabla-horario">
        <thead>
          <tr>
            <th>PISTA</th>
            <th>ACTIVIDAD</th>
            <th>INICIO</th>
            <th> FIN </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td class="evento-general">Horario de Registro</td>
            <td>8:00 am</td>
            <td>8:00 pm</td>
          </tr>
          <tr>
            <td><img src='img/icon-talleres.png'></td>
            <td><a href="http://congresoparques.com/talleres.php">Talleres</a></td>
            <td>10:00 am</td>
            <td>3:00 pm</td>
          </tr>
          <tr>
            <td><img src='img/icon-talleres.png'></td>
            <td>Taller Gehl: "Estudiando la vida pública en parques urbanos y espacios públicos".</td>
            <td>3:30 pm</td>
            <td>7:30 pm</td>
          </tr>
          <tr>
            <td></td>
            <td class="evento-general"><a href="http://congresoparques.com/eventos-sociales.php">Evento Social: Fiesta de Bienvenida</a></td>
            <td>7:30 pm</td>
            <td>11:30 pm</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- <div class="row fila-espacio align-center">
      <div class="column-10 horario">
        <img src="img/dia-2.png" alt="">
      </div>
    </div>
    <div class="row align-center">
      <div class="column-10 fila-espacio horario">
        <img src="img/dia-3.png" alt="">
      </div>
    </div> -->
  </article>
<section id="jueves" class="horarios">
  <header>
    <div class="row column align-center">
      <h4><span>DÍA 2 </span><span>26 DE ABRIL</span></h4>
    </div>
  </header>

<section class="lista-horario">
  <table class="tabla-horario">
    <thead>
      <tr>
        <th>PISTA</th>
        <!-- <th>Bloque</th> -->
        <th>ACTIVIDAD</th>
        <th>SALÓN</th>
        <th>INICIO</th>
        <th> FIN </th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td></td>
        <td class="evento-general">Horario de Registro</td>
        <td></td>
        <td>7:00 am</td>
        <td>8:00 pm</td>
      </tr>

        <?php
          $sql = "SELECT * FROM magistrales where dia = 'jueves' and hora <= '10:00:00'  ORDER BY hora";
          $resultado = $conexion->consultar($sql);
          while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>
                    <td>
                      <img src='img/icon-magistrales.png'>";
               echo"</td>
                    <td>";
                echo "<div class='m".$fila["id_magistral"]." link_magistral'>".$fila["conferencia"]."</div>";
                echo    "<div class='detalles-programa' id='m".$fila['id_magistral']."'>";
                // echo        "".$fila['biografia']."";
                echo        "<strong>Conferencista:</strong>";
                echo        "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/img/conferencistas/".$fila['foto']."'>";
                echo            "<a href='conferencista_magistral.php?id=".$fila['id_magistral']."' class='nombre_conferencista'>".$fila['nombre']. "</a> - ";
                echo            $fila['cargo'];
                echo        "</div>
                        </div>";
                echo "</td>
                      <td>5 y 6</td>
                    <td>";
              $hora = strtotime($fila["hora"]);
              echo  date('g:i a', $hora) ;
              echo "</td>";
              echo "<td>";
              $hora_fin = strtotime($fila["hora_fin"]);
              echo  date('g:i a', $hora_fin) ;
              echo "</td>";
          echo "</tr>";
          ?>
          <script>
          $(document).ready(function(){
              $(".<?php echo 'm'.$fila['id_magistral'] ?>").click(function(){
                  $("#<?php echo 'm'.$fila['id_magistral'] ?>").fadeToggle();
                });
          });
          </script>
          <?php
          }
      ?>

      <tr>
        <td><img src='img/icon-expo.png'></td>
        <!-- <td></td> -->
        <td class="evento-general"><a href="http://www.congresoparques.com/expo.php" class="link_expo">Expo Parques Urbanos</a></td>
        <td>1, 2, 3 y 4</td>
        <td>9:45 am</td>
        <td>11:45 am</td>
      </tr>

        <?php
          $sql = "SELECT * FROM conferencias where fecha = '2018-04-26' AND hora < '14:00:00' AND id_tema != 7 ORDER BY hora ";
          $resultado = $conexion->consultar($sql);

          $contador = mysqli_num_rows($resultado);
            while($fila = mysqli_fetch_array($resultado)){

              echo "<tr>
                      <td>
                        <img src='img/icon-sesiones.png'>";
                        switch ($fila['id_tema']) {
                          case '2':
                            echo "<img src='img/icon-disenoC.png' class='pista_programa'>";
                            break;
                          case '3':
                            echo "<img src='img/icon-economiaC.png'class='pista_programa'>";
                              break;
                          case '4':
                            echo "<img src='img/icon-ciudadC.png' class='pista_programa'>";
                              break;
                          case '5':
                            echo "<img src='img/icon-saludC.png' class='pista_programa'>";
                              break;
                          case '6':
                            echo "<img src='img/icon-funcionC.png' class='pista_programa'>";
                              break;
                          default:
                            # code...
                            break;
                        }
            echo "     </td>

                      <td>";
                echo    "<div class='".$fila["id_conferencia"]." enlaces_conferencias'>".$fila["nombre_conferencia"]."</div>";
                echo    "<div class='detalles-programa' id=".$fila['id_conferencia'].">";
                echo      "<p>".$fila['descripcion']."</p>";
                          // Identificar a los expositores
                          $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                          $resultado2 = $conexion->consultar($sql2);
                          echo "<strong>Conferencistas:</strong>";
                          while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                            echo "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
                            echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='nombre_conferencista'>".$fila2['nombre']. "</a> - ";
                            echo $fila2['cargo'].", ";
                            echo $fila2['empresa']." </div>";
                            }
                echo    "</div>";
                echo "</td>
                      <td> ".$fila['lugar']."</td>";

                echo "<td>";
                $hora = strtotime($fila["hora"]);
                echo  date('g:i a', $hora) ;
                echo "</td>";
                echo "<td>";
                $hora_fin = strtotime($fila["hora_fin"]);
                echo  date('g:i a', $hora_fin) ;
                echo "</td>";
            echo "</tr>";

            ?>

            <script>
            $(document).ready(function(){
                $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                    $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();
                  });
            });
            </script>

            <?php
            }
        ?>


        <?php
          $sql = "SELECT * FROM magistrales where dia = 'jueves' and hora >= '12:00:00'  ORDER BY hora";
          $resultado = $conexion->consultar($sql);
            while($fila = mysqli_fetch_array($resultado)){
              echo "<tr>
                      <td>
                        <img src='img/icon-magistrales.png'>";
                 echo"</td>
                      <td>";
                  echo "<div class='m".$fila["id_magistral"]." link_magistral'>".$fila["conferencia"]."</div>";
                  echo    "<div class='detalles-programa' id='m".$fila['id_magistral']."'>";
                  // echo        "".$fila['biografia']."";
                  echo        "<strong>Conferencista:</strong>";
                  echo        "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/img/conferencistas/".$fila['foto']."'>";
                  echo            "<a href='conferencista_magistral.php?id=".$fila['id_magistral']."' class='nombre_conferencista'>".$fila['nombre']. "</a> - ";
                  echo            $fila['cargo'];
                  echo        "</div>
                          </div>";
                  echo "</td>
                      <td>
                      5 y 6 </td><td>";
                $hora = strtotime($fila["hora"]);
                echo  date('g:i a', $hora) ;
                echo "</td>";
                echo "<td>";
                $hora_fin = strtotime($fila["hora_fin"]);
                echo  date('g:i a', $hora_fin) ;
                echo "</td>";
            echo "</tr>";
            ?>
            <script>
            $(document).ready(function(){
                $(".<?php echo 'm'.$fila['id_magistral'] ?>").click(function(){
                    $("#<?php echo 'm'.$fila['id_magistral'] ?>").fadeToggle();
                  });
            });
            </script>
            <?php
            }
        ?>
      <tr>
        <td><img src='img/icon-expo.png'></td>
        <!-- <td></td> -->
        <td class="evento-general"><a href="http://www.congresoparques.com/expo.php" class="link_expo">Expo Parques Urbanos / Comida</a></td>
        <td>1, 2, 3</td>
        <td>2:15 pm</td>
        <td>3:30 pm</td>
      </tr>
        <?php
          $sql = "SELECT * FROM conferencias where fecha = '2018-04-26' AND hora > '14:00:00' AND id_tema != 7 ORDER BY hora ";
          $resultado = $conexion->consultar($sql);
            while($fila = mysqli_fetch_array($resultado)){
              echo "<tr>
                      <td>
                        <img src='img/icon-sesiones.png'>";
                        switch ($fila['id_tema']) {
                          case '2':
                            echo "<img src='img/icon-disenoC.png' class='pista_programa'>";
                            break;
                          case '3':
                            echo "<img src='img/icon-economiaC.png'class='pista_programa'>";
                              break;
                          case '4':
                            echo "<img src='img/icon-ciudadC.png' class='pista_programa'>";
                              break;
                          case '5':
                            echo "<img src='img/icon-saludC.png' class='pista_programa'>";
                              break;
                          case '6':
                            echo "<img src='img/icon-funcionC.png' class='pista_programa'>";
                              break;
                          default:
                            # code...
                            break;
                        }
            echo "     </td>

                <td>";
                echo "<div class='".$fila["id_conferencia"]." enlaces_conferencias'>".$fila["nombre_conferencia"];
                echo "<div class='detalles-programa' id=".$fila['id_conferencia'].">";
                          echo "<p>".$fila['descripcion']."</p>";
                          // Identificar a los expositores
                          $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                          $resultado2 = $conexion->consultar($sql2);
                          echo "<strong>Conferencistas:</strong>";
                          while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                            echo "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
                            echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='nombre_conferencista'>".$fila2['nombre']. "</a> - ";
                            echo $fila2['cargo'].", ";
                            echo $fila2['empresa']." </div>";
                            }
                echo "</div>";

                echo "</td>
                      <td> ".$fila['lugar']."</td>";


                echo "<td>";
                $hora = strtotime($fila["hora"]);
                echo  date('g:i a', $hora) ;
                echo "</td>";
                echo "<td>";
                $hora_fin = strtotime($fila["hora_fin"]);
                echo  date('g:i a', $hora_fin) ;
                echo "</td>";
            echo "</tr>";
            ?>

            <script>
            $(document).ready(function(){
                $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                    $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();
                  });
            });
            </script>
            <?php
            }
        ?>
      <tr>
        <td><img src='img/icon-expo.png'></td>
        <!-- <td></td> -->
        <td class="evento-general"><a href="http://www.congresoparques.com/expo.php" class="link_expo">Expo Parques Urbanos / Beer Party</a></td>
        <td>1, 2, 3 y 4</td>
        <td>7:00 pm</td>
        <td>9:00 pm</td>
      </tr>
    </tbody>
  </table>
</section>
 <!-- horario viernes -->
 <section id="viernes" class="horarios">
   <header>
     <div class="row column align-center">
       <h4><span>DÍA 3 </span><span>27 DE ABRIL</span></h4>
     </div>
   </header>
     <table class="tabla-horario">
       <thead>
         <tr>
           <th>PISTA</th>
           <th>ACTIVIDAD</th>
           <th>SALÓN</th>
           <th>INICIO</th>
           <th> FIN </th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td></td>
           <td class="evento-general">Horario de Registro</td>
           <td></td>
           <td>8:00 am</td>
           <td>5:00 pm</td>
         </tr>
         <?php
           $sql = "SELECT * FROM magistrales where dia = 'viernes' and hora <= '10:00:00'  ORDER BY hora";
           $resultado = $conexion->consultar($sql);
             while($fila = mysqli_fetch_array($resultado)){
               echo "<tr>
                       <td>
                         <img src='img/icon-magistrales.png'>";
                  echo"</td>
                       <td>";
                   echo "<div class='m".$fila["id_magistral"]." link_magistral'>".$fila["conferencia"]."</div>";
                   echo    "<div class='detalles-programa' id='m".$fila['id_magistral']."'>";
                   // echo        "".$fila['biografia']."";
                   echo        "<strong>Conferencista:</strong>";
                   echo        "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/img/conferencistas/".$fila['foto']."'>";
                   echo            "<a href='conferencista_magistral.php?id=".$fila['id_magistral']."' class='nombre_conferencista'>".$fila['nombre']. "</a> - ";
                   echo            $fila['cargo'];
                   echo        "</div>
                           </div>";
                   echo "</td>
                        <td>5 y 6</td>
                       <td>";
                 $hora = strtotime($fila["hora"]);
                 echo  date('g:i a', $hora) ;
                 echo "</td>";
                 echo "<td>";
                 $hora_fin = strtotime($fila["hora_fin"]);
                 echo  date('g:i a', $hora_fin) ;
                 echo "</td>";
             echo "</tr>";
             ?>
             <script>
             $(document).ready(function(){
                 $(".<?php echo 'm'.$fila['id_magistral'] ?>").click(function(){
                     $("#<?php echo 'm'.$fila['id_magistral'] ?>").fadeToggle();
                   });
             });
             </script>
             <?php
             }
         ?>
         <tr>
           <td><img src='img/icon-expo.png'></td>
           <td class="evento-general"><a href="http://www.congresoparques.com/expo.php" class="link_expo">Expo Parques Urbanos</a></td>
           <td>1, 2, 3 y 4</td>
           <td>9:30 am</td>
           <td>11:15 am</td>
         </tr>
         <?php
           $sql = "SELECT * FROM conferencias where fecha = '2018-04-27' AND hora < '13:00:00' AND id_tema != 7  ORDER BY hora ";
           $resultado = $conexion->consultar($sql);
             while($fila = mysqli_fetch_array($resultado)){
               echo "<tr>
                       <td>
                         <img src='img/icon-sesiones.png'>";
                         switch ($fila['id_tema']) {
                           case '2':
                             echo "<img src='img/icon-disenoC.png' class='pista_programa'>";
                             break;
                           case '3':
                             echo "<img src='img/icon-economiaC.png'class='pista_programa'>";
                               break;
                           case '4':
                             echo "<img src='img/icon-ciudadC.png' class='pista_programa'>";
                               break;
                           case '5':
                             echo "<img src='img/icon-saludC.png' class='pista_programa'>";
                               break;
                           case '6':
                             echo "<img src='img/icon-funcionC.png' class='pista_programa'>";
                               break;
                           default:
                             # code...
                             break;
                         }
             echo "     </td>
                       <td>";
                 echo    "<div class='".$fila["id_conferencia"]." enlaces_conferencias'>".$fila["nombre_conferencia"]."</div>";
                 echo    "<div class='detalles-programa' id=".$fila['id_conferencia'].">";
                 echo      "<p>".$fila['descripcion']."</p>";
                             // Identificar a los expositores
                             $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                             $resultado2 = $conexion->consultar($sql2);
                             echo "<strong>Conferencistas:</strong>";
                             while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                               echo "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
                               echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='nombre_conferencista'>".$fila2['nombre']. "</a> - ";
                               echo $fila2['cargo'].", ";
                               echo $fila2['empresa']." </div>";
                               }
                 echo    "</div>";
                 echo "</td>";
                 echo "
                          <td> ".$fila['lugar']."
                        <td>";
                 $hora = strtotime($fila["hora"]);
                 echo  date('g:i a', $hora) ;
                 echo "</td>";
                 echo "<td>";
                 $hora_fin = strtotime($fila["hora_fin"]);
                 echo  date('g:i a', $hora_fin) ;
                 echo "</td>";
             echo "</tr>";
             ?>

             <script>
             $(document).ready(function(){
                 $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                     $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();
                   });
             });
             </script>
             <?php
             }
         ?>
         <?php
           $sql = "SELECT * FROM magistrales where dia = 'viernes' and hora >= '12:00:00'  ORDER BY hora";
           $resultado = $conexion->consultar($sql);
             while($fila = mysqli_fetch_array($resultado)){
               echo "<tr>
                       <td>
                         <img src='img/icon-magistrales.png'>";
                  echo"</td>
                       <td>";
                   echo "<div class='m".$fila["id_magistral"]." link_magistral'>".$fila["conferencia"]."</div>";
                   echo    "<div class='detalles-programa' id='m".$fila['id_magistral']."'>";
                   // echo        "".$fila['biografia']."";
                   echo        "<strong>Conferencista:</strong>";
                   echo        "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/img/conferencistas/".$fila['foto']."'>";
                   echo            "<a href='conferencista_magistral.php?id=".$fila['id_magistral']."' class='nombre_conferencista'>".$fila['nombre']. "</a> - ";
                   echo            $fila['cargo'];
                   echo        "</div>
                           </div>";
                   echo "</td>
                        <td>5 y 6</td>
                       <td>";
                 $hora = strtotime($fila["hora"]);
                 echo  date('g:i a', $hora) ;
                 echo "</td>";
                 echo "<td>";
                 $hora_fin = strtotime($fila["hora_fin"]);
                 echo  date('g:i a', $hora_fin) ;
                 echo "</td>";
             echo "</tr>";
             ?>
             <script>
             $(document).ready(function(){
                 $(".<?php echo 'm'.$fila['id_magistral'] ?>").click(function(){
                     $("#<?php echo 'm'.$fila['id_magistral'] ?>").fadeToggle();
                   });
             });
             </script>
             <?php
             }
         ?>
         <tr>
           <td><img src='img/icon-expo.png'></td>
           <td class="evento-general"><a href="http://www.congresoparques.com/expo.php" class="link_expo">Expo Parques Urbanos / Comida</a></td>
            <td>1, 2, 3 y 4</td>
           <td>1:45 pm</td>
           <td>3:15 pm</td>
         </tr>
         <?php
           $sql = "SELECT * FROM conferencias where fecha = '2018-04-27' AND hora > '15:00:00' AND id_tema != 7 ORDER BY hora ";
           $resultado = $conexion->consultar($sql);
             while($fila = mysqli_fetch_array($resultado)){
               echo "<tr>
                       <td>
                         <img src='img/icon-sesiones.png'>";
                         switch ($fila['id_tema']) {
                           case '2':
                             echo "<img src='img/icon-disenoC.png' class='pista_programa'>";
                             break;
                           case '3':
                             echo "<img src='img/icon-economiaC.png'class='pista_programa'>";
                               break;
                           case '4':
                             echo "<img src='img/icon-ciudadC.png' class='pista_programa'>";
                               break;
                           case '5':
                             echo "<img src='img/icon-saludC.png' class='pista_programa'>";
                               break;
                           case '6':
                             echo "<img src='img/icon-funcionC.png' class='pista_programa'>";
                               break;
                          case '8':
                            echo "<img src='img/icon_sesiones_rapidas.png' class='pista_programa'>";
                              break;
                           default:
                             # code...
                             break;
                         }
             echo "     </td>

                 <td>";
                 echo    "<div class='".$fila["id_conferencia"]." enlaces_conferencias'>".$fila["nombre_conferencia"]."</div>";
                 echo    "<div class='detalles-programa' id=".$fila['id_conferencia'].">";
                 echo      "<p>".$fila['descripcion']."</p>";
                           // Identificar a los expositores
                           $sql2 = "SELECT * FROM usuarios WHERE id_conferencia = ".$fila['id_conferencia']." AND nivel = 2 ";
                           $resultado2 = $conexion->consultar($sql2);
                           echo "<strong>Conferencistas:</strong>";
                           while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                             echo "<div class='resumen'><img class='foto-conferencista' src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila2['foto']."'>";
                             echo "<a href='conferencista.php?id=".$fila2['id_usuario']."' class='nombre_conferencista'>".$fila2['nombre']. "</a> - ";
                             echo $fila2['cargo'].", ";
                             echo $fila2['empresa']." </div>";
                             }
                 echo    "</div>";
                 echo "</td>
                    <td> ".$fila['lugar']."</td>
                 ";
                 echo "<td>";
                 $hora = strtotime($fila["hora"]);
                 echo  date('g:i a', $hora) ;
                 echo "</td>";
                 echo "<td>";
                 $hora_fin = strtotime($fila["hora_fin"]);
                 echo  date('g:i a', $hora_fin) ;
                 echo "</td>";
             echo "</tr>";
             ?>

             <script>
             $(document).ready(function(){
                 $(".<?php echo $fila['id_conferencia'] ?>").click(function(){
                     $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();
                   });
             });
             </script>
             <?php
             }
         ?>
       <tr>
         <td></td>
         <td class="evento-general">Evento Social: Fiesta de Clausura</td>
         <td></td>
         <td>8:00 pm</td>
         <td>12:00 am</td>
       </tr>
       </tbody>
     </table>
</section>
</main>


<?php include'assets/footer.php'; ?>
