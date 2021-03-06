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
    <title>Temáticas</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-5">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">TEMÁTICAS</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column">
        <p><span class="letra-capital">E</span>l 1er Congreso Internacional de Parques y Recreación es un evento
          especializado de contenido educativo y vivencial dirigido a un público
          cuyo trabajo impacta los parques urbanos y espacios públicos.</p>
          <p>Cada temática profundizará en elementos cruciales para las mejores
            prácticas en los parques urbanos y permitirán a los asistentes
            especializarse en alguna área si así lo deseas o conocer todos
            los aspectos del espacio público.</p>
        </p>
      </div>
    </div>
    <div class="fila-espacio tematicas">
      <div class="row align-center">
        <div class="column small-12 medium-6">
          <figure class="carga">
            <img data-src="img/diseno-planeacion.png" alt="Diseño y Planeación" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
          </figure>
        </div>
        <div class="column small-12 medium-6 planeacion-diseno">
          <h4>Diseño y Planeación</h4>
          <p>El objetivo de esta temática es hablar sobre principios y
            procesos de diseño para parques; ahondando en temas específicos
            como: áreas infantiles, juegos de agua, parques de mascotas entre otros. Se
            brindará información sobre los procesos intelectuales y
            creativos de diseño y la importancia de la crrecta planeación
            de estos espacios para su éxito. </p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column small-12 medium-6">
          <figure class="carga">
           <img data-src="img/la-ciudad.png" alt="La ciudad" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
          </figure>
        </div>
        <div class="column small-12 medium-6 la-ciudad">
          <h4>La Ciudad</h4>
          <p>Las ciudades están compuestas por elementos de gran complejidad
            que las hacen únicas. La peatonalidad, proyectos de bicicleta pública,
            datos abiertos, barrios seguros y la resiliencia serán algunos de
            los elementos tratados en esta temática. </p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column small-12 medium-6">
          <figure class="carga">
            <img data-src="img/economia.png" alt="Economía y Usos del Espacio Público" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
          </figure>
        </div>
        <div class="column small-12 medium-6 economia">
          <h4>Economía y Usos del Espacio Público</h4>
          <p>Además de ser espacios para la recreación, los parques
            impulsan la economía y generan empleos. Se presentarán modelos
            exitosos de administración, fomento económico y procuración de
            fondos mostrando la gran variedad de formas en las que un parque
            puede ser sostenible en el tiempo. </p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column small-12 medium-6">
          <figure class="carga">
            <img data-src="img/salud-medio-ambiente.png" alt="Salud y Medio Ambiente" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
          </figure>
        </div>
        <div class="column medium-6 salud">
          <h4>Salud y Medio Ambiente</h4>
          <p>Los parques traen infinidad de beneficios a la salud ya que,
            además de invitarnos a la activación física, son el lugar en
            donde nos encontramos con la naturaleza. Las áreas verdes
            disminuyen los índices de depresión, ansiedad y estrés laboral;
            limpian el aire, mejoran las circulaciones del viento y regulan
            los patrones de precipitaciones anuales.</p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column small-12 medium-6">
          <figure class="carga">
            <img data-src="img/participacion-ciudadana.png" alt="Servicio Público y Participación Ciudadana" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
          </figure>
        </div>
        <div class="column medium-6 servicio-publico">
          <h4>Servicio Público y Participación Ciudadana</h4>
          <p>Los parques necesitan servidores públicos comprometidos con
            el espacio público, con las mejores prácticas para su
            implementación y sostenimiento en conjunto con la ciudadanía,
            fomentando la participación ciudadana. En esta temática se
            presentarán modelos para fomentar la participación ciudadana
            y estructuras que mejoren el servicio público enfocado a los
            parques.</p>
        </div>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
