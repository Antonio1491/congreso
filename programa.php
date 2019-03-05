<?php
session_start();
    $_SESSION['dia'] = '25';
    $_SESSION['mes'] = '3'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2018';
    $_SESSION['hora'] = '9';
    $_SESSION['minuto'] = '00';
    $_SESSION['segundo'] = '00';

require("assets/clases_2.php");
$listaBloque = new Programa();
?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Completo</title>
    <?php  require("assets/head_common.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
<body onload="countdown('contador')">
  <header class="header_paginas header_programa">
    <div class="hide-for-small-only">
    <?php include'assets/menu.php'; ?>
    </div>
      <hgroup class="titulo_pagina"><br>
        <h2>Programa</h2>
        <h1>Congreso parques</h1>
      </hgroup>
  </header>
  <main ><br>
    <!-- <div class="row align-center">
        <h5 class="subtitulo">Próximamente el programa completo.</h5>
    </div> -->

    <div class="row ">
      <div class="column medium-6 small-12">
        <section class="dia">
          <div class="dia_titulo">
            <a href=""> Día 1</a>
            <h4>Martes</h4>
            <h5>14 de Mayo</h5>
          </div>
          <div class="itinerario">
            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/registro.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 08:00 - 18:00
                </div>
                <div class="tituloActividad">
                  <h6>Registro</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 10:00 - 14:00
                </div>
                <div class="tituloActividad contieneBloque" id="taller_dia1m">
                  <h6>Talleres</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#taller_dia1m").click(function(){
                        $(".taller_dia1m").fadeToggle();
                      });
                });
              </script>
              <section class="taller_dia1m">
                  <div class="lista_talleres">
                    <ul>
                      <li>Barrio Antiguo de Monterrey</li>
                      <li>De siderúrgica a parque urbano: la transformación de Parque Fundidora</li>
                      <li>Parque Ecológico Chipinque</li>
                    </ul>
                  </div>
              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 15:00 - 19:00
                </div>
                <div class="tituloActividad contieneBloque" id="taller_dia1v">
                  <h6>Talleres</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#taller_dia1v").click(function(){
                        $(".taller_dia1v").fadeToggle();
                      });
                });
              </script>
              <section class="taller_dia1v">
                  <div class="lista_talleres">
                    <ul>
                      <li>Distrito Tec </li>
                      <li>La experiencia detrás de un evento </li>
                      <li>Parque Rufino Tamayo</li>
                      <li>Cultura y el espacio público</li>
                    </ul>
                  </div>
              </section>
            </article>

          </div>
        </section>
      </div>
      <div class="column medium-6 small-12">
        <section class="dia">
          <div class="dia_titulo">
            <a href=""> Día 2</a>
            <h4>Miércoles</h4>
            <h5>15 de Mayo</h5>
          </div>
          <div class="itinerario">
            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/registro.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 08:00 - 20:30
                </div>
                <div class="tituloActividad">
                  <h6>Registro</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 10:00 - 14:00
                </div>
                <div class="tituloActividad contieneBloque" id="taller_dia2m">
                  <h6>Talleres</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#taller_dia2m").click(function(){
                        $(".taller_dia2m").fadeToggle();
                      });
                });
              </script>
              <section class="taller_dia2m">
                  <div class="lista_talleres">
                    <ul>
                      <li>Centros Deportivos</li>
                      <li>Operando Parque Fundidora</li>
                      <li>Gehl Institute</li>
                      <li>Vivero ORCOTEC, muros y techos verdes </li>
                      <li>Recaudación de fondos </li>
                    </ul>
                  </div>
              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 15:00 - 19:00
                </div>
                <div class="tituloActividad contieneBloque" id="taller_dia2v">
                  <h6>Talleres</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#taller_dia2v").click(function(){
                        $(".taller_dia2v").fadeToggle();
                      });
                });
              </script>
              <section  class="taller_dia2v">
                  <div class="lista_talleres">
                    <ul>
                      <li>Navegando Paseo Santa Lucía  </li>
                      <li>Marketing y branding</li>
                      <li>Placemaking</li>
                    </ul>
                  </div>
              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/expo.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 15:00 - 19:00
                </div>
                <div class="tituloActividad">
                  <h6>Inauguración - Expo Parques</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/fiesta.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 20:00 - 23:59
                </div>
                <div class="tituloActividad">
                  <h6>Evento Social - Inauguración Congreso Parques</h6>
                </div>
              </header>
            </article>

          </div>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="column medium-6 small-12">
        <section class="dia">
          <div class="dia_titulo">
            <a href=""> Día 3</a>
            <h4>Jueves</h4>
            <h5>16 de Mayo</h5>
          </div>
          <div class="itinerario">
            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/registro.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 07:00 - 18:00
                </div>
                <div class="tituloActividad">
                  <h6>Registro</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/conferencias.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 08:00 - 10:00
                </div>
                <div class="tituloActividad contieneBloque" id="magistrales1">
                  <h6>Conferencias Magistrales</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#magistrales1").click(function(){
                        $(".magistrales1").fadeToggle();
                      });
                });
              </script>
              <section class="magistrales1">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-16", "08:00:00", "10:00:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 10:00 - 15:30
                </div>
                <div class="tituloActividad">
                  <h6>Expo Parques</h6>
                </div>
              </header>
              <section id="registro_dia_1">

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/conferencias.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 15:30 - 17:00
                </div>
                <div class="tituloActividad contieneBloque" id="magistrales2">
                  <h6>Conferencias Magistrales</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#magistrales2").click(function(){
                        $(".magistrales2").fadeToggle();
                      });
                });
              </script>
              <section class="magistrales2">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-16", "15:30:00", "17:00:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/sesiones.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 17:15 - 18:30
                </div>

                <div class="tituloActividad contieneBloque" id="bloque1">
                  <h6>Sesiones Educativas - Bloque 1 </h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#bloque1").click(function(){
                        $(".bloque1").fadeToggle();
                      });
                });
              </script>
              <section class="bloque1">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-16", "17:15:00", "18:30:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/sesiones.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 18:45 - 19:30
                </div>
                <div class="tituloActividad contieneBloque" id="bloque2">
                  <h6>Sesiones Educativas - Bloque 2 </h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#bloque2").click(function(){
                        $(".bloque2").fadeToggle();
                      });
                });
              </script>
              <section class="bloque2">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-16", "18:45:00", "19:30:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/beer_party.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 19:30 - 21:00
                </div>
                <div class="tituloActividad">
                  <h6>Beer Party / Expo Parques </h6>
                </div>
              </header>
              <section id="dia_3">

              </section>
            </article>

          </div>
        </section>
      </div>
      <div class="column medium-6 small-12">
        <section class="dia">
          <div class="dia_titulo">
            <a href="">Día 4</a>
            <h4>Viernes</h4>
            <h5>17 de Mayo</h5>
          </div>
          <div class="itinerario">
            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/registro.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 07:00 - 17:00
                </div>
                <div class="tituloActividad">
                  <h6>Registro</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/sesiones.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 08:00 - 09:15
                </div>
                <div class="tituloActividad contieneBloque" id="bloque3">
                  <h6>Sesiones Educativas - Bloque 3</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#bloque3").click(function(){
                        $(".bloque3").fadeToggle();
                      });
                });
              </script>
              <section class="bloque3">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-17", "08:00:00", "09:15:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/sesiones.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 09:30 - 10:15
                </div>
                <div class="tituloActividad contieneBloque" id="bloque4">
                  <h6>Sesiones Educativas - Bloque 4</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#bloque4").click(function(){
                        $(".bloque4").fadeToggle();
                      });
                });
              </script>
              <section class="bloque4">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-17", "09:30:00", "10:15:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 10:15 - 12:30
                </div>
                <div class="tituloActividad">
                  <h6>Expo Parques</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/sesiones.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 12:30 - 13:45
                </div>
                <div class="tituloActividad contieneBloque" id="bloque5">
                  <h6>Sesiones Educativas - Bloque 5</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#bloque5").click(function(){
                        $(".bloque5").fadeToggle();
                      });
                });
              </script>
              <section class="bloque5">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-17", "12:30:00", "13:45:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 13:45 - 15:30
                </div>
                <div class="tituloActividad">
                  <h6>Expo Parques</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/sesiones.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 15:30 - 16:45
                </div>
                <div class="tituloActividad contieneBloque" id="bloque6">
                  <h6>Sesiones Educativas - Bloque 6</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#bloque6").click(function(){
                        $(".bloque6").fadeToggle();
                      });
                });
              </script>
              <section class="bloque6">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-17", "15:30:00", "16:45:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/sesiones.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 17:00 - 17:45
                </div>
                <div class="tituloActividad contieneBloque" id="bloque7">
                  <h6>Sesiones Educativas - Bloque 7</h6>
                </div>
              </header>
              <script>
                $(document).ready(function(){
                    $("#bloque7").click(function(){
                        $(".bloque7").fadeToggle();
                      });
                });
              </script>
              <section class="bloque7">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-17", "17:00:00", "17:45:00");
                      foreach ($bloque as $valor) {
                        echo "<script>
                          $(document).ready(function(){
                              $('.".$valor["id_conferencia"]."').click(function(){
                                  $('#".$valor["id_conferencia"]."').fadeToggle();
                                });
                          });
                        </script>";
                        $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span class=''>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo ".$valor["id_conferencia"]."'>".$valor["nombre_conferencia"]."</p>
                                          <div class='datosConferencia' id='".$valor["id_conferencia"]."'>
                                            <!--<p>".$valor["descripcion"]."</p><hr>-->";
                                            $conferencistas = $listaBloque->conferencistaImparte($valor["id_conferencia"]);
                                            foreach ($conferencistas as $valor) {
                                              $htmlBloque .="<div class='imparten ".$valor["id_conferencia"]."'>
                                                                <div>
                                                                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                                                                </div>
                                                                <div>
                                                                  <span>".$valor["nombre"]."</span>
                                                                  <p>".$valor["cargo"].", ".$valor["empresa"]."</p>
                                                                </div>
                                                             </div>
                                                             ";
                                            }
                          $htmlBloque .= "
                                        </div>
                                      </div>
                                      </div>";
                        echo $htmlBloque;
                      }
                   ?>

              </section>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/talleres.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 17:45 - 19:00
                </div>
                <div class="tituloActividad">
                  <h6>Expo Parques</h6>
                </div>
              </header>
            </article>

            <article class="actividad">
              <header>
                <div>
                  <img src="img/iconos_programa/fiesta.png" alt="">
                </div>
                <div class="hora">
                  <i class="fi-clock"></i> 20:00 - 23:59
                </div>
                <div class="tituloActividad">
                  <h6>Evento Social - Clausura Congreso Parques</h6>
                </div>
              </header>
            </article>

        </section>
      </div>
      </div>
    </div><br>

    <div class="row column align-center">
      <a href="assets/ProgramaPreliminar2019.pdf"><img src="img/programa_preliminar_2019.png"></a>
    </div>

  </main>




<?php include'assets/footer.php'; ?>
