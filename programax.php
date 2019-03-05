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
  </head>
<body onload="countdown('contador')">
  <header class="header_paginas header_programa">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina"><br>
        <h2>Programa</h2>
        <h1>Congreso parques</h1>
      </hgroup>
  </header>
  <main ><br>
    <!-- <div class="row align-center">
        <h5 class="subtitulo">Próximamente el programa completo.</h5>
    </div> -->
    <div class="row column align-center">
      <a href="assets/ProgramaPreliminar2019.pdf"><img src="img/programa_preliminar_2019.png"></a>
    </div>
    <div class="row ">
      <div class="column medium-6 ">
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
                <div class="tituloActividad">
                  <h6>Talleres</h6>
                </div>
              </header>
              <section id="registro_dia_1">
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
                <div class="tituloActividad">
                  <h6>Talleres</h6>
                </div>
              </header>
              <section id="registro_dia_1">
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
      <div class="column medium-6">
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
                <div class="tituloActividad">
                  <h6>Talleres</h6>
                </div>
              </header>
              <section id="registro_dia_1">
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
                <div class="tituloActividad">
                  <h6>Talleres</h6>
                </div>
              </header>
              <section id="registro_dia_1">
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
      <div class="column medium-6">
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
                <div class="tituloActividad">
                  <h6>Conferencias Magistrales</h6>
                </div>
              </header>
              <section id="dia3">

                    <?php
                        $bloque = $listaBloque->actividadBloque("2019-05-16", "08:00:00", "10:00:00");
                        foreach ($bloque as $valor) {
                          $htmlBloque = "<div class='conferencia'>
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                        </div>
                                        </div>
                                        ";
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
                  <i class="fi-clock"></i> 16:15 - 17:00
                </div>
                <div class="tituloActividad">
                  <h6>Conferencias Magistrales</h6>
                </div>
              </header>
              <section id="dia_3">
                <div class="conferencia">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-16", "15:30:00", "17:00:00");
                      foreach ($bloque as $valor) {
                        $htmlBloque = "
                                      <div class='lugar'>
                                        <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                      </div>
                                      <div>
                                        <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                      </div>
                                      ";
                        echo $htmlBloque;
                      }
                   ?>
                 </div>
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
                <div class="tituloActividad">
                  <h6>Sesiones Educativas - Bloque 1 </h6>
                </div>
              </header>
              <section id="dia_3">
                <div class="conferencia">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-16", "17:15:00", "18:30:00");
                      foreach ($bloque as $valor) {
                        $htmlBloque = "
                                      <div class='lugar'>
                                        <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                      </div>
                                      <div>
                                        <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                      </div>
                                      ";
                        echo $htmlBloque;
                      }
                   ?>
                 </div>
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
                <div class="tituloActividad">
                  <h6>Sesiones Educativas - Bloque 2 </h6>
                </div>
              </header>
              <section id="dia_3">
                <div class="conferencia">
                  <?php
                      $bloque = $listaBloque->actividadBloque("2019-05-16", "18:45:00", "19:30:00");
                      foreach ($bloque as $valor) {
                        $htmlBloque = "
                                      <div class='lugar'>
                                        <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                      </div>
                                      <div>
                                        <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                      </div>
                                      ";
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
      <div class="column medium-6">
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
                <div class="tituloActividad">
                  <h6>Sesiones Educativas - Bloque 3</h6>
                </div>
              </header>
              <section id="dia_3">
                  <div class="conferencia">
                    <?php
                        $bloque = $listaBloque->actividadBloque("2019-05-17", "08:00:00", "09:15:00");
                        foreach ($bloque as $valor) {
                          $htmlBloque = "
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                        </div>
                                        ";
                          echo $htmlBloque;
                        }
                     ?>

                  </div>
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
                <div class="tituloActividad">
                  <h6>Sesiones Educativas - Bloque 4</h6>
                </div>
              </header>
              <section id="dia_3">
                  <div class="conferencia">
                    <?php
                        $bloque = $listaBloque->actividadBloque("2019-05-17", "09:30:00", "10:15:00");
                        foreach ($bloque as $valor) {
                          $htmlBloque = "
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                        </div>
                                        ";
                          echo $htmlBloque;
                        }
                     ?>
                  </div>
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
                <div class="tituloActividad">
                  <h6>Sesiones Educativas - Bloque 5</h6>
                </div>
              </header>
              <section id="dia_3">
                  <div class="conferencia">
                    <?php
                        $bloque = $listaBloque->actividadBloque("2019-05-17", "12:30:00", "13:45:00");
                        foreach ($bloque as $valor) {
                          $htmlBloque = "
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                        </div>
                                        ";
                          echo $htmlBloque;
                        }
                     ?>
                  </div>
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
                <div class="tituloActividad">
                  <h6>Sesiones Educativas - Bloque 6</h6>
                </div>
              </header>
              <section id="dia_3">
                  <div class="conferencia">
                    <?php
                        $bloque = $listaBloque->actividadBloque("2019-05-17", "15:30:00", "16:45:00");
                        foreach ($bloque as $valor) {
                          $htmlBloque = "
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                        </div>
                                        ";
                          echo $htmlBloque;
                        }
                     ?>
                  </div>
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
                <div class="tituloActividad">
                  <h6>Sesiones Educativas - Bloque 7</h6>
                </div>
              </header>
              <section id="dia_3">
                  <div class="conferencia">
                    <?php
                        $bloque = $listaBloque->actividadBloque("2019-05-17", "17:00:00", "17:45:00");
                        foreach ($bloque as $valor) {
                          $htmlBloque = "
                                        <div class='lugar'>
                                          <i class='fi-marker'></i> <span>".$valor["lugar"]."</span>
                                        </div>
                                        <div>
                                          <p class='titulo'>".$valor["nombre_conferencia"]."</p>
                                        </div>
                                        ";
                          echo $htmlBloque;
                        }
                     ?>
                  </div>
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
    </div>

  </main>




<?php include'assets/footer.php'; ?>
