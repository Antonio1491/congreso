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
    <title>Expo Comercial Parques Urbanos</title>
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
    <div class=" header header-expo">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EXPO COMERCIAL PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <div class="action text-center">
      <a href="registro-expositores.php" class="button">Solicitud de expositor</a>
    </div>
    <div class="row contenido expo">
      <div class="column">
        <h4>PISO DE EXPOSICIÓN</h4>
        <p>Esta modalidad de contratación no cuenta con mobiliario, alfombra
          ni electricidad ya que está destinado para diseños especiales contratados
          por el expositor con el proveedor de su preferencia. En estos casos, generalmente
          se requiere de una toma eléctrica especial la cual deberá ser contratada por el expositor.</p>
        </p>
      </div>
      <div class="row">
        <div class="column medium-7">
          <img src="img/expo-1.png" alt="">
        </div>
        <div class="column medium-5" >
          <img src="img/precio-espacio.png" alt="">
          <ul>
            <li>Área marcada en piso.</li>
            <li>Decoración general e iluminación propia de la expo.</li>
            <li>Seguridad en áreas comunes.</li>
            <li>Espacio Público en el "Directorio de Expositores". </li>
            <li>Diploma de participación.</li>
            <li>Gafetes de Expositor (uno por cada 3m2).</li>
          </ul>
        </div>
      </div>
      <div class="row expo fila-espacio">
        <div class="column medium-7">
          <h4>STAND DE 3 X 3 CON MAMPARAS</h4>
          <ul>
            <li>Mamparas blancas posteriores y laterales de 1m de ancho x 2.50m de alto en sistema
            Octanorm y panel trovicel de 3mm.</li>
            <li>Antepecho con nombre del expositor en vinil con letra estánder.</li>
            <li>Contacto eléctrico doble de 110 volts por cada 9m2.</li>
            <li>Iluminación dicroica.</li>
            <li>1 Mesa.</li>
            <li>2 Sillas.</li>
            <li>1 Bote de basura.</li>
            <li>Seguridad en áreas comunes.</li>
            <li>Servicio de limpieza en pasillos y áreas comunes.</li>
            <li>Registro en el "Directorio de Expositores".</li>
            <li>Diploma de participación.</li>
            <li>Gafetes de Expositor (uno por cada 3m2).</li>
          </ul>
        </div>
        <div class="column medium-5">
        <img src="img/precio-stand-2.png" alt="" class="precio">
        <img src="img/stand.png" alt="" class="stand">
        </div>
      </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
