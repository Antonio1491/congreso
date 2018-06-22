
<!-- menú canvas para dispositivos moviles -->
<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <div id="off-canvas" class="off-canvas position-left" data-off-canvas>
      <nav data-magellan>
        <ul class="vertical menu" data-drilldown>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">congreso</a>
            <ul class=" vertical menu sub-menu-central">

                  <li><a href="conferencias.php">Conferencias magistrales</a></li>
                  <li><a href="sesiones.php">Sesiones Educativas</a></li>
                  <li><a href="talleres.php">Talleres</a></li>
                  <li><a href="tematicas.php">Temáticas</a></li>
                  <li><a href="programa.php">Programa Completo</a></li>
                  <li><a href="conferencistas.php">Ponentes</a></li>
                  <li><a href="patrocinadores.php">Patrocinadores y socios</a></li>
                  <li><a href="eventos-sociales.php">Eventos Sociales</a></li>
            </ul>
          </li>
          <li><a href="expo.php">Expo Parques Urbanos</a></li>
          <li><a href="#">Participa</a>
            <ul class=" vertical menu  sub-menu-central">
              <li><a href="congreso-tips.php">Congreso Tips</a></li>
              <li><a href="inscripcion.php">Inscripción</a></li>

              <!-- <li><a href="convocatoria-sesiones.php">Convocatoria 2018</a></li> -->
              <li><a href="concurso.php">concurso mobiliario urbano</a></li>
              <li><a href="convocatoria-sesiones.php">Convocatoria 2019</a></li>
              <li><a href="convocatoria-sesiones.php">Convocatoria 2019</a></li>
              <li><a href="participar.php">¿por qué participar?</a></li>
              <li><a href="promotor.php">¿Quieres ser promotor?</a></li>
              <li><a href="preguntas.php">Preguntas frecuentes</a></li>
              <li><a href="contacto.php">Contacto y Sede</a></li>
              <!-- <li><a href="voluntarios.php">Voluntarios</a></li> -->
            </ul>
          </li>
          <li><a href="#">Monterrey, Nuevo león</a>
            <ul class="vertical menu  sub-menu-central">
              <li><a href="CiudadDeLasMontanas.php">La Ciudad de las Montañas</a></li>
              <li><a href="http://www.merida.gob.mx/municipio/sitiosphp/merida/eventos.phpx" target="_blank">Actividades locales</a></li>
              <li><a href="hospedajes.php">Hospedaje</a></li>
              <li><a href="conectividad.php">Conectividad</a></li>
              <li><a href="http://www.merida.gob.mx/capitalcultural/" target="_blank">Turismo en Mérida</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <div class="off-canvas-content" data-off-canvas-content>
    <header>
      <!--======================== Sección header "contador" ===================================-->
      <section id="encabezado">
        <div class="row align-justify align-middle hide-for-small-only">
          <div class="colum logo-principal">
            <a href="index.php"><img src="img/congreso-parques-urbanos-logo.png" alt="Congreso Internacional de Parques Urbanos"></a>
          </div>
          <div class="column ">
            <div class="fecha">
              <h4 id="">14-17 | MAYO | 2019</h4>
              <h5>MONTERREY, NUEVO LEÓN, MÉXICO</h5>
            </div>
          </div>
          <div class="shrink column " id="idiomas">
            <!-- <a href="index.php"><img src="img/mex.png" alt="Español"></a>
            <a href="english/index.php"><img src="img/usa.png" alt="Englis"></a> -->
          </div>
          <div class="colum contenido-contador">
            <div id="redes-header" class="text-center">
              <a href="https://www.facebook.com/Congreso-Internacional-de-Parques-Urbanos-433605833658855/" target="_blank"><img src="img/facebook.png" class="rotacion transition"  alt=""></a>
              <a href="https://twitter.com/congreso_parque" target="_blank"><img src="img/twitter.png" alt="" class="rotacion transition"></a>
              <a href="https://www.instagram.com/congreso_parques/" target="_blank"><img src="img/instagram.png" class="rotacion transition"></a>
              <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank"><img src="img/youtobe.png" class="rotacion transition" alt=""></a>
            </div>
            <div class="contador">

              <div id='contador'></div>
            </div>
          </div>
        </div>

      </section>
      <!-- aviso  -->
      <!-- <section id="aviso">
          <div class="row align-center">
            ¡Registro en línea cerrado!, podrás inscribirte el día 25 de Abril a partir de las 8:00am en el lugar del evento
          </div>
      </section> -->

      <!-- Menu -->
      <section id="menu-sticky" class="sticky-container " data-sticky-container>
        <div class="data-sticky" data-sticky data-options="marginTop:0;" data-sticky-on="small"
          data-top-anchor="menu-sticky">
          <nav id="menu-central" class="row" data-magellan>
            <ul class="menu align-spaced show-for-small-only">
              <li><a href="#" data-toggle="off-canvas">Menu</a></li>
            </ul>
              <ul class="dropdown menu align-spaced show-for-medium" id="" data-dropdown-menu>
                <li><a href="#">congreso</a>
                  <ul class="menu sub-menu-central">
                    <li><a href="conferencias.php">Conferencias magistrales</a></li>
                    <li><a href="sesiones.php">Sesiones Educativas</a></li>
                    <li><a href="talleres.php">Talleres</a></li>
                    <!--<li><a href="tematicas.php">Temáticas</a></li>-->
                    <li><a href="programa.php">Programa Completo</a></li>
                    <li><a href="conferencistas.php">Ponentes</a></li>
                    <li><a href="patrocinadores.php">Patrocinadores y socios</a></li>
                    <li><a href="eventos-sociales.php">Eventos Sociales</a></li>
                  </ul>
                </li>
                <li><a href="expo.php">Expo Parques Urbanos</a></li>
                <li><a href="#">Participa</a>
                  <ul class="menu  sub-menu-central">
                    <!-- <li><a href="congreso-tips.php">Congreso Tips</a></li> -->
                    <li><a href="inscripcion.php">Inscripción</a></li>

                    <!-- <li><a href="convocatoria-sesiones.php">Convocatoria 2018</a></li> -->
                    <!-- <li><a href="concurso.php">concurso mobiliario urbano</a></li> -->
                    <li><a href="convocatoria-sesiones.php">Convocatoria 2019</a></li>
                    <li><a href="participar.php">¿por qué participar?</a></li>
                    <!-- <li><a href="promotor.php">¿Quieres ser promotor?</a></li> -->
                    <li><a href="preguntas.php">Preguntas frecuentes</a></li>
                    <!-- <li><a href="voluntarios.php">Voluntarios</a></li> -->
                    <!-- <li><a href="contacto.php">Contacto y Sede</a></li> -->
                    <!--<li><a href="congreso-2019.php">Congreso 2019</a></li>-->
                  </ul>
                </li>
                <li><a href="#">monterrey, Nuevo león</a>
                  <ul class="menu  sub-menu-central">
                    <li><a href="CiudadDeLasMontanas.php">La Ciudad de las Montañas</a></li>
                    <li><a href="http://www.merida.gob.mx/municipio/sitiosphp/merida/eventos.phpx" target="_blank">Actividades locales</a></li>
                    <li><a href="hospedajes.php">Hospedaje</a></li>
                    <li><a href="conectividad.php">Conectividad</a></li>
                    <li><a href="http://www.merida.gob.mx/capitalcultural/" target="_blank">Turismo en Mérida</a></li>
                    <li><a href="http://www.nuevoleon.travel/quehacer/" target="_blank">Turismo Nuevo León</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </section><!--Fin menu -->
      </header>
