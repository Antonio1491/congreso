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
    <title>La Ciudad Blanca</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main>
  <article class="">
    <div class=" header header-4">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">LA CIUDAD BLANCA</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column">
        <p><span class="letra-capital">L</span>a Ciudad de Mérida, Yucatán fue fundada el 6 de Enero de 1542 por el español Francisco de Montejo y León "El Mozo", donde se encontraba la antigua Ciudad Maya T'Hó.</p>
        <p>Mérida se posiciona como una ciudad llena de cultura y tradiciones con gente encantadora que da la bienvenida a todo aquel que la visita. Todas sus calles y esquinas están llenas de historia y su arquitectura como testigo de nuestro pasado colonial.</p>
          <p>Es la capital del estado de Yucatán y Capital Americana de la Cultura en 2017.</p>
          <p>La revista Forbes la nombró como una de las tres mejores ciudades de México para vivir, y con las mejores alternativas para invertir y hacer negocios;</p>
          <p>El periódico español El País, la eligió como una de las 10 mejores ciudades para darle la bienvenida a 2017.</p>
          <p>Lonely Planet, una destacada publicación internacional en materia turística, calificó a la ciudad como una de las más atractivas internacionalmente.</p>
      </div>
    </div>
    <div class="row">
      <div class="video">
        <iframe width="420" height="315" src="https://www.youtube.com/embed/w4kxTTyH7yw" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
