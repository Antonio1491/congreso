<?php
session_start();
    $_SESSION['dia'] = '14';
    $_SESSION['mes'] = '5'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2019';
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
    <title>La Ciudad de las Montañas</title>
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_sede">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina"><br>
        <h2>La ciudad de las montañas</h2>
        <h1>Monterrey</h1>
        <h1>Nuevo León</h1>
      </hgroup>
    </div>
  </header>
<main class="sede">
  <div class="row">
    <p class="descripcion_principal">El Congreso Parques te espera en uno de los centros de convenciones y exposiciones más importantes de México. CINTERMEX ubicado dentro de Parque Fundidora, es un parque urbano incluyente y multifuncional que contribuye a reforzar el tejido social ofreciendo un espacio verde, seguro y de acceso 100% gratuito.</p>
  </div>
  <div class="row align-center">
    <h3 class="subtitulo">Monterrey: Escenario de Éxitos</h3>
  </div>
  <section id="video_sede" class="row expanded align-center" >
    <iframe width="960" height="455" src="https://www.youtube-nocookie.com/embed/uzITkJXazsI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </section>

  <div class="row contenido_sede">
    <div class="column medium-8">
      <p>Monterrey posee una gran cultura e historia; con el paso del tiempo la
        ciudad ha ido desarrollándose y, hoy por hoy, es un centro de negocios
        industrial y económico de suma importancia en México. También tiene
        grandes paisajes como el Cerro de la Silla, zonas verdes y monumentos
        históricos dignos de visitar entre ellos El Cerro de la Silla, El Cerro
        de las Mintras, La Sierra Madre que se cobija con paisajes llenos de
        montañas, aguas termales y por supuesto una diversidad en sus museos.
        Algo que no debes perderte de esta ciudad anfitriona es la librería
        Conarte, considerada de las más bellas de la tierra. </p>
        <p>Los alrededores de Monterrey te harán volver por más, sobre todo
          cuando la aventura y el contacto con la naturaleza son parte de ti.
          Ven y disfruta del Congreso Parques ¡La ciudad de las montañas te espera! </p>
    </div>
    <div class="column medium-4 sabias">
      <h4>¿Sabías que? </h4>
      <ul>
        <li>Monterrey tiene la segunda economía más importante de América Latina.</li>
        <li>Se encuentra en el número 9 en el ranking mundial del turismo internacional (OMT).</li>
        <li>Cuenta con más de 3,500 empresas extranjeras establecidas.</li>
        <li>Posee 52 museos.</li>
      </ul>
    </div>
  </div>
  <div class="cinta_azul">
    <div class="row cintermex_sede">
      <div class="column medium-4 cintermex_icono">
        <div class="">
          <figure>
            <img src="img/sede_cintermex.png" alt="">

          </figure>
        </div>
        <div class="">
          <a href="https://www.google.com/maps/place/Cintermex/@25.6778062,-100.2913019,17z/data=!4m8!1m2!2m1!1scintermex!3m4!1s0x8662942a8d42b18f:0x1eee54a9dfbc9332!8m2!3d25.6781236!4d-100.2879763" target="_blank" class="btn_vermas"> VER EN EL MAPA</a>
        </div>

      </div>
      <div class="column medium-8">
        <h3 class="subtitulo_bc">Turismo Monterrey </h3>
        <h5 class="subtitulo_bc">Paseo Santa Lucia</h5>
        <p>Recorrido en embarcaciones por un canal considerado una Maravilla de México.</p>
        <h5 class="subtitulo_bc">Parque Fundidora:</h5>
        <p>Patrimonio del estado con hermosas áreas verdes.  Centro cultural y recreativo.</p>
        <h5 class="subtitulo_bc">Ecoturismo y aventura:</h5>
        <p>Increíbles parajes naturales donde vivir emociones al máximo. </p>
        <h5 class="subtitulo_bc">Parques de diversión:</h5>
        <p>Parque Plaza Sésamo, Bioparque Estrella y Bosque Mágico entre los más visitados. </p>
        <h5 class="subtitulo_bc">Gastronomía</h5>
        <p>Más de 1,700 restaurantes de calidad turística con renombrados chefs especializados en cocina regional, nacional e internacional</p>
      </div>
    </div>
  </div>

    <div class="row menu_sede">
      <div class="column medium-3">
        <a href="http://www.merida.gob.mx/capitalcultural/" target="_blank"><img src="img/turismo.png" alt=""></a>
      </div>
      <div class="column medium-3">
          <a href="http://www.yucatan.travel/" target="_blank"><img src="img/parques.png" alt="">
      </div>
      <div class="column medium-3">
          <a href="conectividad.php" target=""><img src="img/conectividad.png" alt="">
      </div>
      <div class="column medium-3">
          <a href="hospedajes.php" target=""><img src="img/hospedaje.png" alt="">
      </div>
    </div>
</main>

<?php include'assets/footer.php'; ?>
